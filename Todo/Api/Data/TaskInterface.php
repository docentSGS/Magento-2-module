<?php 
declare(strict_types=1);

namespace SGS\Todo\Api\Data;

/**
 * @api
 */
interface TaskInterface{
	/**
	 * @return int
	 */
	public function getTaskId(): int;

	/**
	 * @return string
	 */
	public function getStatus(): string;

	/**
	 * @return string
	 */
	public function getLabel(): string;
	/**
	 * @param int $taskId [description]
	 * @return void
	 */
	public function setTaskId(int $taskId);
	/**
	 * @param string $status [description]
	 * @return void
	 */
	public function setStatus(string $status); 
	/**
	 * @param string $label [description]
	 * @return void
	 */
	public function setLabel(string $label);

}