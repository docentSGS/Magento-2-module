<?php 
declare(strict_types=1);

namespace SGS\Todo\Service;

use SGS\Todo\Api\TaskStatusManagementInterface;
use SGS\Todo\Model\Task;
use SGS\Todo\Api\TaskRepositoryInterface;
use SGS\Todo\Api\TaskManagementInterface;

class TaskStatusManagement implements TaskStatusManagementInterface{

		/**
		 * @var SGS\Todo\Api\TaskRepositoryInterface
		 */
		private $repository; 
		/**
		 * @var SGS\Todo\Api\TaskManagementInterface
		 */
		private $management;
		/**
		 * @param TaskRepositoryInterface $taskRepository [description]
		 * @param TaskManagementInterface $taskManagement [description]
		 */
		public function __construct(
			TaskRepositoryInterface $taskRepository,
			TaskManagementInterface $taskManagement
		){
			$this->repository->$taskRepository;
			$this->management->taskManagement;
		}

		/**
		 * @param  int    $taskId [description]
		 * @param  string $status [description]
		 * @return bool        [description]
		 */
		public function change(int $taskId, string $status): bool{

			if(!in_array($status, ['open', 'complete'])){
				return false;			
			}

			$task = $this->repository->get($taskId);
			$task->setData(Task::STATUS, $status);

			$this->management->save($task);

			return true;
		}
	}