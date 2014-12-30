<?php
/**
 * @category   Gabi77
 * @package    Gabi77_Googleconfiance
 * @copyright  Copyright (c) 2014 Gabi77 (http://www.gabi77.com)
 * @author     Gabriel Janez <contact@gabi77.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Gabi77_Googleconfiance_Helper_Data extends Mage_Core_Helper_Abstract
{

    const IS_ENABLED = 'googleconfiance/general_settings/general_enabled';

    public function isEnabled() {
        return Mage::getStoreConfig(self::IS_ENABLED);
    }

    /**
     * Retrieve information from Google confiance configuration
     *
     * @param string $field
     * @param int|string|null|Mage_Core_Model_Store $storeId
     *
     * @return mixed
     */

    public function getConfigData($field, $storeId = null) {
        if (null === $storeId) {
            $storeId = Mage::app()->getStore();
        }
        $path = 'googleconfiance/general_settings/' . $field;

        return Mage::getStoreConfig($path, $storeId);
    }

    /**
      * Parameter for configuration Google Confiance.
      *
      * @param int|string|null|Mage_Core_Model_Store $storeId
      *
      * @return array
      **/

    public function parameterConfiance() {

    	$info = array(	'status'                     => $this->getConfigData('general_enabled'),
                                'domain'                   => $this->getConfigData('general_google_domain'),
    			'trusted_id'               => $this->getConfigData('general_google_trusted_store_id'),
    			'subid' 		=> $this->getConfigData('general_google_merchant_subid'),
    			'country' 		=> $this->getConfigData('general_google_country'),
    			'page_lang'              => $this->getConfigData('general_google_page_lang'),
    			'product_lang' 	=> $this->getConfigData('general_google_product_lang'),
    			'type' 			=> $this->getConfigData('general_google_type'));
    	return $info;
    }

}