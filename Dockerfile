FROM thebiggive/php:8.0

# Install the AWS CLI - needed to load in secrets safely from S3. See https://aws.amazon.com/blogs/security/how-to-manage-secrets-for-amazon-ec2-container-service-based-applications-by-using-amazon-s3-and-docker/
RUN apt-get clean && apt-get update -qq && apt-get install -y awscli libzip-dev && \
    rm -rf /var/lib/apt/lists/* /var/cache/apk/*

RUN docker-php-ext-install mysqli zip

COPY ./docker-support/makeconfig.php    /makeconfig.php
COPY ./docker-support/makedb.php        /makedb.php

# Load secrets from S3 like with our custom ECS apps.
COPY ./secrets_entrypoint.sh /usr/local/etc/secrets_entrypoint.sh

# Modify the standard Mautic index.php and the entrypoint which installs it,
# to fix infinite redirect loops behind an ALB with SSL.
COPY ./alb-safe-index.php /usr/local/etc/alb-safe-index.php
COPY ./entrypoint.sh /entrypoint.sh

# Apply recommend PHP configuration for best stability and performance.
COPY ./php-conf/assert.ini /usr/local/etc/php/conf.d/assert.ini

EXPOSE 80

ENTRYPOINT /usr/local/etc/secrets_entrypoint.sh apache2-foreground
