<?php 
declare(strict_types=1);

namespace SGS\Todo\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Task extends AbstractDb{
	protected function _construct(){
		$this->_init('sgs_todo_task', 'task_id');
	}
}