<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.type.dwcsend_list' shared service.

return $this->services['mautic.form.type.dwcsend_list'] = new \Mautic\DynamicContentBundle\Form\Type\DynamicContentSendType(($this->services['router'] ?? $this->getRouterService()));
