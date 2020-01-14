<?php
/**
 * @category   Xlab
 * @package    Xlab_Banner
 * @author     vinit.dapl@gmail.com 
 */

namespace Xlab\Banner\Model\ResourceModel\Banner;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'banner_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Xlab\Banner\Model\Banner',
            'Xlab\Banner\Model\ResourceModel\Banner'
        );
    }
}