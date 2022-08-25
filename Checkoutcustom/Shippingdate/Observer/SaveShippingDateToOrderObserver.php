<?php
namespace Checkoutcustom\Shippingdate\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;

class SaveShippingDateToOrderObserver implements ObserverInterface
{
   
   /* public function execute(EventObserver $observer)
    {
        $order = $observer->getOrder();
       
 
        $quote = $quoteRepository->get($order->getQuoteId());
        $order->setShippingDate( $quote->getShippingDate() );

        return $this;
    }
*/


    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();
        $quote = $observer->getEvent()->getQuote();

        $order->setData('shipping_date', $quote->getShippingDate());

        return $this;
    }

}