<?php

namespace SGS\CRUD\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection  extends AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('SGS\CRUD\Model\Post', 'SGS\CRUD\Model\ResourceModel\Post');
    }
}
