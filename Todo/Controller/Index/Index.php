<?php 

declare(strict_types=1);

namespace SGS\Todo\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;
use SGS\Todo\Model\Task;
use SGS\Todo\Api\TaskManagementInterface;
use SGS\Todo\Model\TaskFactory;
use SGS\Todo\Model\ResourceModel\Task as TaskResource;
use SGS\Todo\Service\TaskRepository;


class Index extends Action
{	
	private $taskResource;
	private $taskFactory;
	private $taskRepository; 
	private $searchCriteriaBuilder;
	private $taskManagement;

	public function __construct(
		Context $context, 
		TaskFactory $taskFactory, 
		TaskResource $taskResource, 
		TaskRepository $taskRepository,
		SearchCriteriaBuilder $searchCriteriaBuilder,
		TaskManagementInterface $taskManagement
	) {
		$this->taskFactory = $taskFactory;
		$this->taskResource = $taskResource;
		$this->taskRepository = $taskRepository;
		$this->searchCriteriaBuilder = $searchCriteriaBuilder;
		$this->taskManagement = $taskManagement;

		parent::__construct($context);
	}

	public function execute(){

		// $task = $this->taskFactory->create();
		// $task->setData([
		// 	'label' => 'New 33 task',
		// 	'status'=> 'open',
		// 	'customer_id'=> 2
		// ]);
		// $this->taskResource->save($task);

		return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
	}
}