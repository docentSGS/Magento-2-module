<?php

namespace SGS\CRUD\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Request\Http;
use Magento\Framework\View\Result\PageFactory;
use SGS\CRUD\Model\PostFactory;

class Delete extends Action
{
    protected $_pageFactory;
    protected $_request;
    protected $_postFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        Http $request,
        PostFactory $postFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_request = $request;
        $this->_postFactory = $postFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->_request->getParam('id');
        $post = $this->_postFactory->create();
        $result = $post->setId($id);
        $result = $result->delete();
        $this->messageManager->addSuccessMessage("Data removed successfully!");

        return $this->_redirect('crud/index/index');
    }
}
