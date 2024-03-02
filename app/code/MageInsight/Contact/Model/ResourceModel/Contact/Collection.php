<?php

namespace MageInsight\Contact\Model\ResourceModel\Contact;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('MageInsight\Contact\Model\Contact', 'MageInsight\Contact\Model\ResourceModel\Contact');
	}
}