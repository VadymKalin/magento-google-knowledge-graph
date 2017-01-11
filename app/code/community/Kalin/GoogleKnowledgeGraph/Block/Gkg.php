<?php
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
     * @param int $storeId Store view ID
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
     * @return true
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
