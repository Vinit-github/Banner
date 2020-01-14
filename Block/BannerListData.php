<?php
/**
 * @category   Xlab
 * @package    Xlab_Banner
 * @author     vinit.dapl@gmail.com
 */

namespace Xlab\Banner\Block;

use Magento\Framework\View\Element\Template\Context;
use Xlab\Banner\Model\BannerFactory;
/**
 * Banner List block
 */
class BannerListData extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Banner
     */
    protected $_banner;
    public function __construct(
        Context $context,
        BannerFactory $banner
    ) {
        $this->_banner = $banner;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Xlab Banner Module List Page'));
        
        if ($this->getBannerCollection()) {
            $pager = $this->getLayout()->createBlock(
                'Magento\Theme\Block\Html\Pager',
                'xlab.banner.pager'
            )->setAvailableLimit(array(5=>5,10=>10,15=>15))->setShowPerPage(true)->setCollection(
                $this->getBannerCollection()
            );
            $this->setChild('pager', $pager);
            $this->getBannerCollection()->load();
        }
        return parent::_prepareLayout();
    }

    public function getBannerCollection()
    {
        $page = ($this->getRequest()->getParam('p'))? $this->getRequest()->getParam('p') : 1;
        $pageSize = ($this->getRequest()->getParam('limit'))? $this->getRequest()->getParam('limit') : 5;

        $banner = $this->_banner->create();
        $collection = $banner->getCollection();
        $collection->addFieldToFilter('status','1');
        //$banner->setOrder('banner_id','ASC');
        $collection->setPageSize($pageSize);
        $collection->setCurPage($page);

        return $collection;
    }

    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }
}