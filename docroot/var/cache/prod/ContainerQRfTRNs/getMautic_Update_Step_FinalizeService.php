<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.update.step.finalize' shared service.

return $this->services['mautic.update.step.finalize'] = new \Mautic\CoreBundle\Update\Step\FinalizeUpdateStep(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.helper.paths'] ?? $this->getMautic_Helper_PathsService()), ($this->services['session'] ?? $this->getSessionService()), ($this->services['mautic.helper.app_version'] ?? ($this->services['mautic.helper.app_version'] = new \Mautic\CoreBundle\Helper\AppVersion())));
