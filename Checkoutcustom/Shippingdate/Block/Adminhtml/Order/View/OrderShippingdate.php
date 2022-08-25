<?php
namespace Checkoutcustom\Shippingdate\Block\Adminhtml\Order\View;

class OrderShippingdate extends \Magento\Backend\Block\Template
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

  public function getOrderShippingdate() {
    if($currentOrder = $this->_registry->registry('current_order')) {
      return $currentOrder->getShippingDate();
    }
  }
}
