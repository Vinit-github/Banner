<?php
/**
 * @category   Xlab
 * @package    Xlab_Banner
 * @author     vinit.dapl@gmail.com
 */

namespace Xlab\Banner\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\NotFoundException;
use Xlab\Banner\Block\BannerView;

class View extends \Magento\Framework\App\Action\Action
{
	protected $_bannerview;

	public function __construct(
        Context $context,
        BannerView $bannerview
    ) {
        $this->_bannerview = $bannerview;
        parent::__construct($context);
    }

	public function execute()
    {
    	if(!$this->_bannerview->getSingleData()){
    		throw new NotFoundException(__('Parameter is incorrect.'));
    	}
    	
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
