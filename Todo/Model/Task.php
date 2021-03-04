<?php 
declare(strict_types=1);
namespace SGS\Todo\Model;

use Magento\Framework\Model\AbstractModel;
use SGS\Todo\Model\ResourceModel\Task as TaskResource; 
use SGS\Todo\Api\Data\TaskInterface;

class Task extends AbstractModel implements TaskInterface{	

	const TASK_ID = 'task_id';
	const STATUS = 'status';
	const LABEL = 'label';
	
	protected function _construct()
	{
		$this->_init(TaskResource::class);
	}
	/**
	 * @return int
	 */
	public function getTaskId(): int
	{
		return (int) $this->getData(self::TASK_ID);
	}
	/**
	 * @return string
	 */
	public function getStatus(): string
	{
		return $this->getData(self::STATUS);
	}
	/**
	 * @return string
	 */
	public function getLabel(): string
	{
		return $this->getData(self::LABEL);
	}

	/**
	 * @param int $taskId [description]
	 */
	public function setTaskId(int $taskId)
	{
		$this->setData(self::TASK_ID, $taskId);
	}
	/**
	 * @param string $status [description]
	 */
	public function setStatus(string $status)
	{
		$this->setData(self::STATUS, $status);
	}
	/**
	 * @param string $label [description]
	 */
	public function setLabel(string $label)
	{
		$this->setData(self::LABEL, $label);
	}
}