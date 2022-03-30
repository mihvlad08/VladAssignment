<?php
namespace VladAssignment\Vendor\Model;
class Vendor extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'assignment_vendor_entity';

	protected $_cacheTag = 'assignment_vendor_entity';

	protected $_eventPrefix = 'assignment_vendor_entity';

	protected function _construct()
	{
		$this->_init('VladAssignment\Vendor\Model\ResourceModel\Vendor');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
