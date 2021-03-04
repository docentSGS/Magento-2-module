<?php 
declare(strict_types=1);

namespace SGS\Todo\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;
use SGS\Todo\Api\Data\TaskInterface;

/**
 * @api
 */
interface TaskSearchResultInterface extends SearchResultsInterface {
	/**
	 * @return \SGS\Todo\Api\Data\TaskInterface[]
	 */
	public function getItems();
	/**
	 * @param TaskInterface[] $items
	 * @return SearchResultsInterface
	 */
	public function setItems(array $items);
}