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
    const XML_PATH_GKG_FACEBOOK =          'googleknowledgegraph/socialprofilelinks/facebook';
    const XML_PATH_GKG_TWITTER =           'googleknowledgegraph/socialprofilelinks/twitter';
    const XML_PATH_GKG_GOOGLEPLUS =        'googleknowledgegraph/socialprofilelinks/googleplus';
    const XML_PATH_GKG_INSTAGRAM =         'googleknowledgegraph/socialprofilelinks/instagram';
    const XML_PATH_GKG_YOUTUBE =           'googleknowledgegraph/socialprofilelinks/youtube';
    const XML_PATH_GKG_TUMBLR =            'googleknowledgegraph/socialprofilelinks/tumblr';
    const XML_PATH_GKG_MYSPACE =           'googleknowledgegraph/socialprofilelinks/myspace';
    const XML_PATH_GKG_SOUNDCLOUD =        'googleknowledgegraph/socialprofilelinks/soundcloud';
    const XML_PATH_GKG_PINTERREST =        'googleknowledgegraph/socialprofilelinks/pinterrest';
    const XML_PATH_GKG_LINKEDIN =          'googleknowledgegraph/socialprofilelinks/linkedin';

    /**
     * Whether Google Knowledge Graph is ready to use
     *
     * @param mixed $store
     * @return bool
     */
    public function isGoogleKnowledgeGraphAvailable($store = null)
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_GKG_ENABLED, $store);
    }

}