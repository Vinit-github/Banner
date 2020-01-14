<?php
/**
 * @category   Xlab
 * @package    Xlab_Banner
 * @author     vinit.dapl@gmail.com 
 */

namespace Xlab\Banner\Model\ResourceModel;

class Banner extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('xlab_banner', 'banner_id'); 
        //here "xlab_banner" is table name and "banner_id" is the primary key of custom table
    }
}