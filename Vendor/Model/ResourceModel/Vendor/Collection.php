<?php
namespace VladAssignment\Vendor\Model\ResourceModel\Vendor;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'vendor_id';
	protected $_eventPrefix = 'vladassignment_vendor_vendor_collection';
	protected $_eventObject = 'vendor_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('VladAssignment\Vendor\Model\Vendor', 'VladAssignment\Vendor\Model\ResourceModel\Vendor');
	}

}