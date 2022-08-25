<?php
namespace Checkoutcustom\Salesman\Block\Adminhtml\Order\View;

class OrderSalesman extends \Magento\Backend\Block\Template
{
  protected $_registry;

  public function __construct(
    \Magento\Backend\Block\Template\Context $context,
    \Magento\Framework\Registry $registry,
    array $data = []
  ) {
      $this->_registry = $registry;
      parent::__construct($context, $data);
  }

  public function getAkOrderSalesMan() {
    if($currentOrder = $this->_registry->registry('current_order')) {
      return $currentOrder->getSalesMan();
    }
  }
}
