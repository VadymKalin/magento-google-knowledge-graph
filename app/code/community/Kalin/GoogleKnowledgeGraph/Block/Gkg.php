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

/**
 * GoogleKnowledgeGraph Page Block
 *
 * @category   Kalin
 * @package    Kalin_GoogleKnowledgeGraph
 * @author    Vadym Kalin <kalinvadim@gmail.com>
 */

class Kalin_Googleknowledgegraph_Block_Gkg extends Mage_Core_Block_Template
{
    /*
     * Get logo url path
     *
     * @return string
     */
    protected function _getLogoUrl()
    {
        $fileName = Mage::helper('googleknowledgegraph')->getLogoPath();
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
     * Get all social links
     *
     * @return string
     */
    protected function _getSocialLinks()
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
     * Get config data for social links
     *
     * @return string
     */
    protected function getConfigData($socialLinks)
    {
        return Mage::getStoreConfig('googleknowledgegraph/socialprofilelinks/' . $socialLinks);
    }

    /**
     * Is Google Knowledge Graph available
     *
     * @return bool
     */
    protected function _isAvailable()
    {
        return Mage::helper('googleknowledgegraph')->isGoogleKnowledgeGraphAvailable();
    }


    /**
     * Render Google Knowledge Graph
     *
     * @return string
     */
    protected function _toHtml()
    {
        if(!$this->_isAvailable()) {
            return '';
        }
        return parent::_toHtml();
    }
}
