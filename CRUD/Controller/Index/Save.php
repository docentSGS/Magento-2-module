<?php

namespace SGS\CRUD\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Filesystem;
use Magento\Framework\View\Result\PageFactory;
use SGS\CRUD\Model\PostFactory;

class Save extends Action
{
    protected $_pageFactory;
    protected $_postFactory;
    protected $_filesystem;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        PostFactory $postFactory,
        Filesystem $filesystem
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        $this->_filesystem = $filesystem;
        return parent::__construct($context);
    }

    public function execute()
    {
//        if ($this->getRequest()->isPost()) {
//            $input = $this->getRequest()->getPostValue();
//            $postData = $this->_postFactory->create();
//            if (isset($input['post_id'])) {
//                $id = $input['post_id'];
//            } else {
//                $id = 0;
//            }
//            if($id != 0){
//                $postData->load($id);
//                $postData->addData($input);
//                $postData->setId($id);
//                $postData->save();
//            }else{
//                $postData->setData($input)->save();
//            }
//            $this->messageManager->addSuccessMessage("Data added successfully!");
//            return $this->_redirect('crud/index/index');
//        }
//        return $this->_redirect('crud/index/index');


        $resultRedirect = $this->resultRedirectFactory->create();
        $data = (array)$this->getRequest()->getPost();
         $model = $this->_postFactory->create();
        $id = $this->getRequest()->getParam('id');
        if($id){
            $model->load($id);
            $model->addData([
                "name"=>$data['name'],
                "url_key"=>$data['url_key'],
                "tags"=>$data['tags'],
                "post_content"=>$data['post_content']]);
            $model->save();
            return $resultRedirect->setPath('*/*/index');
        }else{
            $model->addData([
                "name"=>$data['name'],
                "url_key"=>$data['url_key'],
                "tags"=>$data['tags'],
                "post_content"=>$data['post_content']]);
            $model->save();
            return $resultRedirect->setPath('*/*/index');
        }
    }
}
