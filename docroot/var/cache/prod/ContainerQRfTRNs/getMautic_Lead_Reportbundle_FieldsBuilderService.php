<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.reportbundle.fields_builder' shared service.

return $this->services['mautic.lead.reportbundle.fields_builder'] = new \Mautic\LeadBundle\Report\FieldsBuilder(($this->services['mautic.lead.model.field'] ?? $this->getMautic_Lead_Model_FieldService()), ($this->services['mautic.lead.model.list'] ?? $this->getMautic_Lead_Model_ListService()), ($this->services['mautic.user.model.user'] ?? $this->getMautic_User_Model_UserService()));
