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
 * @copyright Copyright (c) 2015-2016 Vadym Kalin (http://full-stack-dev.com)
 * @license   http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
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
//    const XML_PATH_GKG_FACEBOOK =          'googleknowledgegraph/socialprofilelinks/facebook';
//    const XML_PATH_GKG_TWITTER =           'googleknowledgegraph/socialprofilelinks/twitter';
//    const XML_PATH_GKG_GOOGLEPLUS =        'googleknowledgegraph/socialprofilelinks/googleplus';
//    const XML_PATH_GKG_INSTAGRAM =         'googleknowledgegraph/socialprofilelinks/instagram';
//    const XML_PATH_GKG_YOUTUBE =           'googleknowledgegraph/socialprofilelinks/youtube';
//    const XML_PATH_GKG_TUMBLR =            'googleknowledgegraph/socialprofilelinks/tumblr';
//    const XML_PATH_GKG_MYSPACE =           'googleknowledgegraph/socialprofilelinks/myspace';
//    const XML_PATH_GKG_SOUNDCLOUD =        'googleknowledgegraph/socialprofilelinks/soundcloud';
//    const XML_PATH_GKG_PINTERREST =        'googleknowledgegraph/socialprofilelinks/pinterrest';

    /**
     * @var array social profileslinks
     */
    protected $socialLinks = array(
        'facebook',
        'twitter',
        'googleplus',
        'instagram',
        'youtube',
        'tumblr',
        'myspace',
        'soundcloud',
        'pinterrest',
        'linkedin'
    );

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

    /*
     * Get logo url path
     *
     * @param int $storeId Store view ID
     * @return string
     */
    public function getLogoUrl($storeId = null)
    {
        $fileName = Mage::getStoreConfig(self::XML_PATH_GKG_LOGOS, $storeId);
        if ($fileName) {
            $uploadDir = 'theme';
            $fullFileName = Mage::getBaseDir('media') . DS . $uploadDir . DS . $fileName;
            if (file_exists($fullFileName)) {
                return Mage::getBaseUrl('media') . $uploadDir . '/' . $fileName;
            }
        }
        return Mage::getDesign()->getSkinUrl('images/logo_email.gif');

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
     * Get area served
     *
     * @param null $storeId
     * @return mixed
     */
    public function getAreaServed($storeId = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_GKG_AREASERVED, $storeId);
    }

    /**
     * Get contact option
     *
     * @param null $storeId
     * @return mixed
     */
    public function getContactOption($storeId = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_GKG_CONTACTOPTION, $storeId);
    }

    /**
     * Get available language
     *
     * @param null $storeId
     * @return mixed
     */
    public function getAvailableLanguage($storeId = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_GKG_AVAILABLELANGUAGE, $storeId);
    }

    /**
     * Get all links
     *
     * @return string
     */
    public function getSocialLinks()
    {
        $socialLinks = array(
            'facebook',
            'twitter',
            'googleplus',
            'instagram',
            'youtube',
            'tumblr',
            'myspace',
            'soundcloud',
            'pinterrest',
            'linkedin'
        );

        foreach ($socialLinks as $link)
        {
            $linked = $this->getConfigData($link);
            if ($linked != '') {
                echo '"' .$linked . '"'. ',';
            }
        }
    }

    /**
     * Get all not empty social profiles
     *
     * @return string
     */
    protected function getConfigData($socialLinks)
    {
        return Mage::getStoreConfig('googleknowledgegraph/socialprofilelinks/' . $socialLinks);
    }
}