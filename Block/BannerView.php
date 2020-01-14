<?php
/**
 * @category   Xlab
 * @package    Xlab_Banner
 * @author     vinit.dapl@gmail.com
 */

namespace Xlab\Banner\Block;

use Magento\Framework\View\Element\Template\Context;
use Xlab\Banner\Model\BannerFactory;
use Magento\Cms\Model\Template\FilterProvider;
/**
 * Banner View block
 */
class BannerView extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Banner
     */
    protected $_banner;
    public function __construct(
        Context $context,
        BannerFactory $banner,
        FilterProvider $filterProvider
    ) {
        $this->_banner = $banner;
        $this->_filterProvider = $filterProvider;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Xlab Banner Module View Page'));
        
        return parent::_prepareLayout();
    }

    public function getSingleData()
    {
        $id = $this->getRequest()->getParam('id');
        $banner = $this->_banner->create();
        $singleData = $banner->load($id);
        if($singleData->getBannerId() || $singleData['banner_id'] && $singleData->getStatus() == 1){
            return $singleData;
        }else{
            return false;
        }
    }
}