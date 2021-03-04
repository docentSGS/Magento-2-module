<?php 
declare(strict_types=1);

namespace SGS\Todo\Service;

use SGS\Todo\Api\CustomerTaskListInterface;
use SGS\Todo\Api\TaskRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use SGS\Todo\Api\Data\TaskInterface;


class CustomerTaskList implements CustomerTaskListInterface {
	/**
	 * @var TaskRepositoryInterface
	 */
	private $taskRepository;
	/**
	 * @var SearchCriteriaBuilder
	 */
	private $searchCriteriaBuilder;   

	public function __construct(
		TaskRepositoryInterface $taskRepository,
		SearchCriteriaBuilder $searchCriteriaBuilder
	){
		$this->taskRepository = $taskRepository;
		$this->searchCriteriaBuilder = $searchCriteriaBuilder;
	}
	/**
	 * @return \SGS\Todo\Api\Data\TaskInterface[]
	 */
	public function getList(){
		return $this->taskRepository->getList($this->searchCriteriaBuilder->create())->getItems(); 
	}
}