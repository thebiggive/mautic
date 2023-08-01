# The Big Give's Mautic

This repository is a thin layer for tooling used by the Big Give to
test and deploy Mautic.

## `cron` tasks

In an effort to avoid re-working too much of the outdated Docker repo's entrypoint logic, we add `cron`
to our Linux base – everything in one container – which is not very Docker-y or horizontal scaling-safe.
We should probably take a closer look at what scheduled commands do and any locking ability before running
this live, particularly with more than one task in an ECS Service.

## Local runs

To test a build locally:

    docker build -t thebiggive-mautic .

Deployment are automatic:
* from `develop` to [Staging](https://mautic-staging.thebiggivetest.org.uk)
* from `main` to [Production](https://mautic-production.thebiggive.org.uk)

## Volumes and files added in the image

The 2 additional files for ECS runs to work are added by our `Dockerfile`
to `/usr/local/etc`.

Mautic's persisted data lives at `/var/www/html` – we don't modify the
official image's assumptions around this. On ECS a persistent volume
(e.g. an EFS mount) can be mapped to this internal path, or the S3 plugin
can be used to make the media approach more 12-factor-friendly. (The latter
would probably be better if it works, but is not yet tested!)
