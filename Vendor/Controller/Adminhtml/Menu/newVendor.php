<?php
namespace VladAssignment\Vendor\Controller\Adminhtml\Menu;
use VladAssignment\Vendor\Model\ResourceModel\Vendor;
use Magento\Backend\App\Action;
use VladAssignment\Vendor\Model\VendorFactory as VendorFactory;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class newVendor extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Context     $context,
        PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    /**
     * Edit A Vendor Page
     *
     * @return \Magento\Framework\View\Result\Page
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute() {
        $this->_view->getPage()->getConfig()->getTitle()->prepend( __('Create Vendor Yay'));
        $resultPage = $this->resultPageFactory->create();

        return $resultPage;
    }
}