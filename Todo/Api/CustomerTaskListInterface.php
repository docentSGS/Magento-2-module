<?php 
declare(strict_types=1);

namespace SGS\Todo\Api;

use \SGS\Todo\Api\Data\TaskInterface;
/**
 * @api 
 */
interface CustomerTaskListInterface {
	/**
	 * @return \SGS\Todo\Api\Data\TaskInterface[]
	 */
	public function getList();
}