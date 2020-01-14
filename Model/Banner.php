<?php
/**
 * @category   Xlab
 * @package    Xlab_Banner
 * @author     vinit.dapl@gmail.com
 */

namespace Xlab\Banner\Model;

use Magento\Framework\Model\AbstractModel;

class Banner extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Xlab\Banner\Model\ResourceModel\Banner');
    }
}