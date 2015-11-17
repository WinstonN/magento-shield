<?php

class AgentsOf_Shield_Model_Source_Area
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => Mage_Core_Model_App_Area::AREA_ADMIN,
                'label' => Mage::helper('agentsof_shield')->__('Admin')
            ),
            array(
                'value' => Mage_Core_Model_App_Area::AREA_FRONTEND,
                'label' => Mage::helper('agentsof_shield')->__('Frontend')
            ),
            array(
                'value' => Mage_Core_Model_App_Area::AREA_GLOBAL,
                'label' => Mage::helper('agentsof_shield')->__('Global')
            )
        );
    }
}