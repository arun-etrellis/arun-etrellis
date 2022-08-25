<?php

namespace Checkoutcustom\Customemail\Observer;

use Magento\Framework\Event\ObserverInterface;

class MyData implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $transport = $observer->getTransport();
        //$transport['myvar'] = 'My Value';
        $order = $transport->getOrder('shipping_date');
        $shippingdate = $order;
        $transport['myvar']=$shippingdate;
       /* if ($transport['payment_html'] == 'transfer') {
            $transport['payment_html'] = 'myvar';
        }*/
    }
}



/*public function execute(\Magento\Framework\Event\Observer $observer)
    {

        $transport = $observer->getTransport();
         $order = $transport->getOrder();
        $shipdate = $order->getShippDate();
        $deliverydate = $order->getBillingAddress()->getDeliveryDate();
        
        $transport['ShipDate'] = $shipdate;
        $transport['DeliveryDate'] = $deliverydate;
    }*/
//$transport['myvar'] = 'My Value';//


/*    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $transport = $observer->getTransport();
        $order = $observer->getEvent()->getOrder(); 

        $templateVars =  $order->getShippingDate();
        $transport['myvar'] = $templateVars;
        if ($transport['payment_html'] == 'transfer') {
            $transport['payment_html'] = 'myvar';
        }
    }*/