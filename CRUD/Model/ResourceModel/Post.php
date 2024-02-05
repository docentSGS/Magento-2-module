<?php

namespace SGS\CRUD\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

/**
 * Class Order
  */
class Post extends AbstractDb
{
    /**
     * @param Context $context
     */
    public function __construct(
        Context $context
    )
    {
        parent::__construct($context);
    }

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('post', 'post_id');
    }
}
