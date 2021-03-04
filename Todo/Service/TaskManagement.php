<?php 
declare(strict_types=1);

namespace SGS\Todo\Service;

use SGS\Todo\Api\Data\TaskInterface;
use SGS\Todo\Api\TaskManagementInterface;
use SGS\Todo\Model\ResourceModel\Task;
use Magento\Framework\Exception\AlreadyExistsException;


class TaskManagement implements TaskManagementInterface {

	private $resource;

	public function __construct(Task $resource){
		$this->resource = $resource;
	}  
	/**
	 * @param  TaskInterface $task [description]
	 * @return int              [description]
	 * @throws AlreadyExistsException  
	 */
	public function save(TaskInterface $task): int{
		$this->resource->save($task);
		return $task->getTaskId();
	}
	/**
	 * @param  TaskInterface $task [description]
	 * @return bool             [description]
	 * @throws Exception  
	 */
	public function delete(TaskInterface $task): bool{
		$this->resource->delete($task);
		return true;
	}


}