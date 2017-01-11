<?php
/**
 * Kalin
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to kalinvadim@gmail.com so we can send you a copy immediately.
 *
 * @category  Kalin
 * @package   Kalin_GoogleKnowledgeGraph
 * @link      https://github.com/VadymKalin/magento-google-knowledge-graph
 * @author    Vadym Kalin <kalinvadim@gmail.com>
 * @copyright Copyright (c) 2015-2017 Vadym Kalin (http://full-stack-dev.com)
 * @license   http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class Kalin_GoogleKnowledgeGraph_Model_Adminhtml_System_Config_Source_Contacttype
{

    /**
     * Get available options
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'customer-support',    'label' => Mage::helper('googleknowledgegraph')->__('Customer support')),
            array('value' => 'technical-support',   'label' => Mage::helper('googleknowledgegraph')->__('Technical support')),
            array('value' => 'billing-support',     'label' => Mage::helper('googleknowledgegraph')->__('Billing support')),
            array('value' => 'bill-payment',        'label' => Mage::helper('googleknowledgegraph')->__('Bill payment')),
            array('value' => 'sales',               'label' => Mage::helper('googleknowledgegraph')->__('Sales')),
            array('value' => 'reservations',        'label' => Mage::helper('googleknowledgegraph')->__('Reservations')),
            array('value' => 'credit-card-support', 'label' => Mage::helper('googleknowledgegraph')->__('Credit card support')),
            array('value' => 'emergency',           'label' => Mage::helper('googleknowledgegraph')->__('Emergency')),
            array('value' => 'baggage-tracking',    'label' => Mage::helper('googleknowledgegraph')->__('Baggage tracking')),
            array('value' => 'roadside-assistance', 'label' => Mage::helper('googleknowledgegraph')->__('Roadside assistance')),
            array('value' => 'package-tracking',    'label' => Mage::helper('googleknowledgegraph')->__('Package tracking')),
        );
    }
}