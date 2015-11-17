<?php

class AgentsOf_Shield_Model_Source_Redirect
{
    const BASE_URL   = 'base_url';
    const CUSTOM   = 'custom_url';

    public function toOptionArray()
    {
        return array(
            array(
                'value' => self::BASE_URL,
                'label' => Mage::helper('agentsof_shield')->__('Base URL')
            ),
            array(
                'value' => self::CUSTOM,
                'label' => Mage::helper('agentsof_shield')->__('Custom URL')
            )
        );
    }
}