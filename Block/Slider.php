<?php

namespace Xlab\Banner\Block;

use Magento\Framework\View\Element\Template;
use Xlab\Banner\Helper\Data;

class Slider extends Template  {

	protected $_helper;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Xlab\Banner\Helper\Data $helperData)
	{
		$this->_helper = $helperData;
		return parent::__construct($context);
	}
/*
*	return type array
*	send all enabled slides
*/
	public function getSlides(){

		$slides = array('Mango','Bannana','PineApple');
		
		return $slides;		
	}

	public function isEnabled(){
		return $this->_helper->isEnable();
	}
}

