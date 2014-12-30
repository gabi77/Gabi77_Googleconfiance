<?php
/**
 * @category   Gabi77
 * @package    Gabi77_Googleconfiance
 * @copyright  Copyright (c) 2014 Gabi77 (http://www.gabi77.com)
 * @author     Gabriel Janez <contact@gabi77.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Gabi77_Googleconfiance_Model_Source_Product
{
  public function toOptionArray()
  {
    return array(
      array('value' => 'ID', 'label' => Mage::helper()->__('Product ID')),
      array('value' => 'SKU', 'label' => Mage::helper()->__('Sku')),
    );
  }
}