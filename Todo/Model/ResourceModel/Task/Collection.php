<?php 
declare(strict_types=1);

namespace SGS\Todo\Model\ResourceModel\Task;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use \SGS\Todo\Api\Data\TaskSearchResultInterface;
use \SGS\Todo\Model\Task;
use \SGS\Todo\Model\ResourceModel\Task as TaskResource;
use Magento\Framework\Api\SearchCriteriaInterface;

class Collection extends AbstractCollection implements TaskSearchResultInterface {
	/**
	 * @var SearchCriteriaInterface
	 */
	private $searchCriteria;

	protected function _construct(){
		$this->_init(Task::class, TaskResource::class);
	}
	/**
	 * Get search criteria
	 * 
	 * @return SearchCriteriaInterface|null
	 */
	public function getSearchCriteria(){
		return $this->searchCriteria;
	}
	/**
	 * @param SearchCriteriaInterface $searchCriteria
	 * @return Collection 
	 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
	 */
	public function setSearchCriteria(SearchCriteriaInterface $searchCriteria = null){
		$this->searchCriteria = $searchCriteria;
		return $this;
	}

	public function getTotalCount(){
		return $this->getSize();
	}
	/**
	 * Set total count
	 * 
	 * @param int $totalCount
	 * @return  $this
	 */
	public function setTotalCount($totalCount){
		return $this;
	}
	/**
	 * @param array|null $items
	 * @return $this
	 */
	public function setItems(array $items = null){
		if(!$items){
			return $this;
		}
		foreach($items as $item){
			$this->addItem($item);
		}
		return $this;
	}
}
