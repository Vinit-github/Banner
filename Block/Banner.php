<?php
/**
 * @category   Xlab
 * @package    Xlab_Banner
 * @author     vinit.dapl@gmail.com
 */

namespace Xlab\Banner\Block;

/**
 * Banner content block
 */
class Banner extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Xlab Banner Module'));
        
        return parent::_prepareLayout();
    }
}
