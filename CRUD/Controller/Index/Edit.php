<?php

namespace SGS\CRUD\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Request\Http;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;

class Edit extends Action
{
    protected $_pageFactory;
    protected $_request;
    protected $_coreRegistry;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        Http $request,
        Registry $coreRegistry
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_request = $request;
        $this->_coreRegistry = $coreRegistry;
        return parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->_request->getParam('post_id');
        $this->_coreRegistry->register('post_id', $id);
        return $this->_pageFactory->create();
    }
}
