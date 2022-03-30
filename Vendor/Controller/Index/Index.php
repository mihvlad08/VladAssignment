<?php
namespace VladAssignment\Vendor\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
    
	protected $_VendorFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\VladAssignment\Vendor\Model\VendorFactory $VendorFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_VendorFactory = $VendorFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$Vendor = $this->_VendorFactory->create();
		$collection = $Vendor->getCollection();
		foreach($collection as $item){
			echo "<pre>";
			print_r($item->getData());
			echo "</pre>";
		}
		exit();
		return $this->_pageFactory->create();
	}
}
