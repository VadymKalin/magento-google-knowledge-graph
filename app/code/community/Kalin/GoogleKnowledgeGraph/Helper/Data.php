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

/**
 * GoogleKnowledgeGraph data helper
 *
 * @category   Kalin
 * @package    Kalin_GoogleKnowledgeGraph
 */
class Kalin_GoogleKnowledgeGraph_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * Config paths for using throughout the code
     */
    const XML_PATH_GKG_ENABLED =           'googleknowledgegraph/logos/enabled';
    const XML_PATH_GKG_LOGOS =             'googleknowledgegraph/logos/logourl';
    const XML_PATH_GKG_TELEPHONE =         'googleknowledgegraph/corporatecontacts/telephone';
    const XML_PATH_GKG_CONTACTTYPE =       'googleknowledgegraph/corporatecontacts/contacttype';
    const XML_PATH_GKG_AREASERVED =        'googleknowledgegraph/corporatecontacts/areaserved';
    const XML_PATH_GKG_CONTACTOPTION =     'googleknowledgegraph/corporatecontacts/contactoption';
    const XML_PATH_GKG_AVAILABLELANGUAGE = 'googleknowledgegraph/corporatecontacts/availablelanguage';


    /**
     * Check if Google Knowledge Graph is enabled
     *
     * @param int $storeId Store view ID
     * @return bool
     */
    public function isGoogleKnowledgeGraphAvailable($storeId = null)
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_GKG_ENABLED, $storeId);
    }

    /**
     * Get available language
     *
     * @param null $storeId Store view ID
     * @return mixed
     */
    public function getAvailableLanguage($storeId = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_GKG_AVAILABLELANGUAGE, $storeId);
    }

    /**
     * Get area served
     *
     * @param null $storeId  Store view ID
     * @return mixed
     */
    public function getAreaServed($storeId = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_GKG_AREASERVED, $storeId);
    }

    /**
     * Get type of contact
     *
     * @param int $storeId Store view ID
     * @return string
     */
    public function getContactType($storeId = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_GKG_CONTACTTYPE, $storeId);
    }

    /**
     * Get contact option
     *
     * @param null $storeId Store view ID
     * @return mixed
     */
    public function getContactOption($storeId = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_GKG_CONTACTOPTION, $storeId);
    }

    /**
     * Get logo path
     *
     * @param null $storeId Store view ID
     * @return mixed
     */
    public function getLogoPath($storeId = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_GKG_LOGOS, $storeId);
    }

    /**
     * Get telephone number
     *
     * @param int $storeId Store view ID
     * @return integer
     */
    public function getTelephone($storeId = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_GKG_TELEPHONE, $storeId);
    }
}
