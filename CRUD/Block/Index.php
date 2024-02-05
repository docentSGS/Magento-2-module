<?php

namespace SGS\CRUD\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use SGS\CRUD\Model\PostFactory;

class Index extends Template
{
    protected $_filesystem;

    public function __construct(
        Context $context,
        PostFactory $postFactory
    )
    {
        parent::__construct($context);
        $this->_postFactory = $postFactory;
    }

    public function getResult()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        return $collection;
    }
}
