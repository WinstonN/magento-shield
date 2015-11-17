<?php
class AgentsOf_Shield_Model_Observer
{
    public function check($observer)
    {
        $helper = Mage::helper('agentsof_shield');
        $requestHeaderName = $helper->getHeaderName();
        $requestHeaderValue = $helper->getHeaderValue();

        if(!$helper->isEnabled()) {
            return;
        }

        if($helper->getProtectedArea() == Mage_Core_Model_App_Area::AREA_ADMIN &&
            !$helper->isAdmin()) {
            return;
        }

        if($helper->getProtectedArea() == Mage_Core_Model_App_Area::AREA_FRONTEND &&
            $helper->isAdmin()) {
            return;
        }

        if(Mage::app()->getRequest()->getHeader($requestHeaderName) &&
            Mage::app()->getRequest()->getHeader($requestHeaderName) == $requestHeaderValue) {
            return;
        }

        // block or redirect everything that reaches this point
        if($helper->getAction() == AgentsOf_Shield_Model_Source_Action::REDIRECT) {
            if($helper->getRedirect() == AgentsOf_Shield_Model_Source_Redirect::CUSTOM) {
                Mage::app()->getResponse()
                    ->setRedirect($helper->getRedirectUrl())
                    ->sendResponse();

                exit();

            } else {
                Mage::app()->getResponse()
                    ->setRedirect(Mage::getBaseUrl())
                    ->sendResponse();

                exit();
            }

        } else {
            Mage::app()->getResponse()
                ->setHttpResponseCode(403)
                ->setBody('')
                ->sendResponse();

            exit();
        }

    }
}