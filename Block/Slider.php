<?php

namespace Xlab\Banner\Block;

use Xlab\Banner\Helper\Data;

class Slider extends \Magento\Framework\View\Element\Template  {

	protected $_helper;

	public function __construct(		
		\Xlab\Banner\Helper\Data $helperData,
		\Magento\Framework\View\Element\Template\Context $context
	)
	{
		$this->_helper = $helperData;
		parent::__construct($context);
		
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
		return $this->_helper->isEnabled('enable');
	}
}

