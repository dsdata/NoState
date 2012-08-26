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
 
class Dsdata_NoState_Helper_Data extends Mage_Core_Helper_Abstract
{
    
	const XML_PATH_ENABLED   = 'customer/nostate/enabled';

    public function isEnabled()
    {
        return Mage::getStoreConfig( self::XML_PATH_ENABLED );
    }
    
}
