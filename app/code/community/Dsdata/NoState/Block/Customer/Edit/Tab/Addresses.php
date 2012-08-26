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

class Dsdata_NoState_Block_Customer_Edit_Tab_Addresses extends Mage_Adminhtml_Block_Customer_Edit_Tab_Addresses
//Mage_Adminhtml_Block_Widget_Form
{

    public function initForm()
    {
        $customer = Mage::registry('current_customer');

        $form = new Varien_Data_Form();
        $fieldset = $form->addFieldset('address_fieldset', array('legend'=>Mage::helper('customer')->__("Edit Customer's Address")));

        $addressModel = Mage::getModel('customer/address');

        $this->_setFieldset($addressModel->getAttributes(), $fieldset);

        if ($streetElement = $form->getElement('street')) {
            $streetElement->setLineCount(Mage::helper('customer/address')->getStreetLines());
        }

        if ($regionElement = $form->getElement('region')) {
            //$regionElement->setRenderer(Mage::getModel('adminhtml/customer_renderer_region'));
			$regionElement->setNoDisplay(true); //Setting the State/Province field of
        }

        if ($regionElement = $form->getElement('region_id')) {
            $regionElement->setNoDisplay(true);
        }

        if ($country = $form->getElement('country_id')) {
            $country->addClass('countries');
        }

        if ($this->isReadonly()) {
            foreach ($addressModel->getAttributes() as $attribute) {
                $element = $form->getElement($attribute->getAttributeCode());
                if ($element) {
                    $element->setReadonly(true, true);
                }
            }
        }

        $addressCollection = $customer->getAddresses();
        $this->assign('customer', $customer);
        $this->assign('addressCollection', $addressCollection);
        $this->setForm($form);

        return $this;
    }

}
