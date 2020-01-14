<?php
/**
 * @category   Xlab
 * @package    Xlab_Banner
 * @author     vinit.dapl@gmail.com 
 */

namespace Xlab\Banner\Controller\Adminhtml\Items;

class Index extends \Xlab\Banner\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Xlab_Banner::test');
        $resultPage->getConfig()->getTitle()->prepend(__('Slide'));
        $resultPage->addBreadcrumb(__('Slide'), __('Slide'));
        $resultPage->addBreadcrumb(__('Slide'), __('Slide'));
        return $resultPage;
    }
}