<?php 
declare(strict_types=1);

namespace SGS\Todo\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use SGS\Todo\Api\Data\TaskSearchResultInterface;
use SGS\Todo\Api\Data\TaskInterface;

/**
 * @api
 */
interface TaskRepositoryInterface {
	/**
	 * @param  SearchCriteriaInterface $searchCriteria
	 * @return TaskSearchResultInterface
	 */
	public function getList(SearchCriteriaInterface $searchCriteria): TaskSearchResultInterface;
	 /**
	  * @param  int    $taskId 
	  * @return \SGS\Todo\Api\Data\TaskInterface[]
	  */
	public function get(int $taskId): TaskInterface;
}