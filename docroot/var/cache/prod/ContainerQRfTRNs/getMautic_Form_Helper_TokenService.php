<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.form.helper.token' shared service.

return $this->services['mautic.form.helper.token'] = new \Mautic\FormBundle\Helper\TokenHelper(($this->services['mautic.form.model.form'] ?? $this->getMautic_Form_Model_FormService()), ($this->services['mautic.security'] ?? $this->getMautic_SecurityService()));
