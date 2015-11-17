<?php

class AgentsOf_Shield_Model_Source_Action
{
    const REDIRECT   = 'redirect';
    const BLOCK   = 'block';

    public function toOptionArray()
    {
        return array(
            array(
                'value' => self::BLOCK,
                'label' => Mage::helper('agentsof_shield')->__('Block')
            ),
            array(
                'value' => self::REDIRECT,
                'label' => Mage::helper('agentsof_shield')->__('Redirect')
            )
        );
    }
}