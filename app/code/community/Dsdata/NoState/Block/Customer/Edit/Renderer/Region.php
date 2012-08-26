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
/**
 * Customer address region field renderer
 *
 */
class Dsdata_NoState_Block_Customer_Edit_Renderer_Region extends Mage_Adminhtml_Block_Customer_Edit_Renderer_Region
{
    /**
     * Output the region element and javasctipt that makes it dependent from country element
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        if ($country = $element->getForm()->getElement('country_id')) {
            $countryId = $country->getValue();
        }
        else {
            return $element->getDefaultHtml();
        }

        // Don't Display the select or text field on the order creation page 
		
        // $regionId = $element->getForm()->getElement('region_id')->getValue();

        // $html = '<tr>';
        // $element->setClass('input-text');
        // $html.= '<td class="label">'.$element->getLabelHtml().'</td><td class="value">';
        // $html.= $element->getElementHtml();

        // $selectName = str_replace('region', 'region_id', $element->getName());
        // $selectId   = $element->getHtmlId().'_id';
        // $html.= '<select id="'.$selectId.'" name="'.$selectName.'" class="select required-entry" style="display:none">';
        // $html.= '<option value="">'.Mage::helper('customer')->__('Please select').'</option>';
        // $html.= '</select>';

        // $html.= '<script type="text/javascript">'."\n";
        // $html.= 'new regionUpdater("'.$country->getHtmlId().'", "'.$element->getHtmlId().'", "'.$selectId.'", '.$this->helper('directory')->getRegionJson().');'."\n";
        // $html.= '</script>'."\n";

        // $html.= '</td></tr>'."\n";
        // return $html;
    }
}
