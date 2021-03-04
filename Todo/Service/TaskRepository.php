<?php 
declare(strict_types=1);

namespace SGS\Todo\Service; 

use SGS\Todo\Api\Data\TaskSearchResultInterface;
use SGS\Todo\Api\Data\TaskSearchResultInterfaceFactory;
use SGS\Todo\Api\TaskRepositoryInterface;
use SGS\Todo\Model\ResourceModel\Task;
use SGS\Todo\Model\TaskFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use SGS\Todo\Api\Data\TaskInterface;

class TaskRepository implements TaskRepositoryInterface{
	/**
	 * @var Task
	 */ 
	private $resource;
	/**
	 * @var TaskFactory
	 */
	private $taskFactory;
	/**
	 * @var SearchResultsInterfaceFactory
	 */
	private $searchResultsFactory;
	/**
	 * @var CollectionProcessorInterface
	 */
	private $collectionProcessor;
	/**
	 * @param Task $resource
	 * @param TaskFactory $taskFactory
	 * @param CollectionProcessorInterface $collectionProcessor
	 * @param TaskSearchResultInterfaceFactory $searchResultFactory
	 */
	public function __construct(
		Task $resource,
		TaskFactory $taskFactory,
		CollectionProcessorInterface $collectionProcessor,
		TaskSearchResultInterfaceFactory $searchResultFactory
	){
		$this->resource = $resource;
		$this->taskFactory = $taskFactory;
		$this->searchResultsFactory = $searchResultFactory;
		$this->collectionProcessor = $collectionProcessor;

	}
 
	public function getList(SearchCriteriaInterface $searchCriteria): TaskSearchResultInterface { 
		$searchResult = $this->searchResultsFactory->create();
		$searchResult->setSearchCriteria($searchCriteria);

		$this->collectionProcessor->process($searchCriteria, $searchResult);

		return $searchResult;
	}
	public function get(int $taskId): TaskInterface{
		$object = $this->taskFactory->create();
		$this->resource->load($object, $taskId);
		return $object;
	}
}