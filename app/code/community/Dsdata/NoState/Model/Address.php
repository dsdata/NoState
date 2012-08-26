<?php
/**
 * @category Dsdata
 * @package Dsdata_NoState
 * @authors Daniel Sasse <info@golox-web.de, http://www.golox-web.de/>
 * @developer Daniel Sasse <info@golox-web.de, http://www.golox-web.de/>  
 * @version 1.2.1
 * @copyright Golox-Web.de, Daniel Sasse
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)  
 */
?>
<?php

class Dsdata_NoState_Model_Address extends Mage_Customer_Model_Address 
{
    public function validate()
    {
        $errors = array();
        $helper = Mage::helper('customer');
        $this->implodeStreetAddress();
        
//		if (!Zend_Validate::is($this->getCompany(), 'NotEmpty')) {
//            $errors[] = $helper->__('Please enter your Company.');
//        }		
		
		if (!Zend_Validate::is($this->getFirstname(), 'NotEmpty')) {
            $errors[] = $helper->__('Please enter first name.');
        }

        if (!Zend_Validate::is($this->getLastname(), 'NotEmpty')) {
            $errors[] = $helper->__('Please enter last name.');
        }

        if (!Zend_Validate::is($this->getStreet(1), 'NotEmpty')) {
            $errors[] = $helper->__('Please enter street.');
        }

        if (!Zend_Validate::is($this->getCity(), 'NotEmpty')) {
            $errors[] = $helper->__('Please enter city.');
        }

//        if (!Zend_Validate::is($this->getTelephone(), 'NotEmpty')) {
//            $errors[] = $helper->__('Please enter telephone.');
//        }

        if (!Zend_Validate::is($this->getPostcode(), 'NotEmpty')) {
            $errors[] = $helper->__('Please enter zip/postal code.');
        }

        if (!Zend_Validate::is($this->getCountryId(), 'NotEmpty')) {
            $errors[] = $helper->__('Please enter country.');
        }

//        if ($this->getCountryModel()->getRegionCollection()->getSize()
//               && !Zend_Validate::is($this->getRegionId(), 'NotEmpty')) {
//            $errors[] = $helper->__('Please enter state/province.');
//        }

        if (empty($errors)) {
            return true;
        }
        return $errors;
    }
}	
