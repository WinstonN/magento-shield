<?php
class AgentsOf_Shield_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isEnabled()
    {
        return Mage::getStoreConfig('agentsof_shield/general/enable');
    }

    public function getHeaderName()
    {
        return Mage::getStoreConfig('agentsof_shield/general/header_name');
    }

    public function getHeaderValue()
    {
        return Mage::getStoreConfig('agentsof_shield/general/header_value');
    }

    public function getProtectedArea()
    {
        return Mage::getStoreConfig('agentsof_shield/general/enabled_for_area');
    }

    public function getAction()
    {
        return Mage::getStoreConfig('agentsof_shield/general/action');
    }

    public function getRedirect()
    {
        return Mage::getStoreConfig('agentsof_shield/general/redirect');
    }

    public function getRedirectUrl()
    {
        return Mage::getStoreConfig('agentsof_shield/general/redirect_url');
    }

    public function isAdmin()
    {
        if(Mage::app()->getStore()->isAdmin())
        {
            return true;
        }

        if(Mage::getDesign()->getArea() == 'adminhtml')
        {
            return true;
        }

        return false;
    }
}