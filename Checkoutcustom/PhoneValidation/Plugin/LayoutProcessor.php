<?php

namespace Checkoutcustom\PhoneValidation\Plugin;

class LayoutProcessor 
{
   
   
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array $jsLayout
    ) {
        if (isset($jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
            ['children']['shippingAddress']['children']['shipping-address-fieldset']['children']
        )) {

            $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
            ['children']['shippingAddress']['children']['shipping-address-fieldset']['children']
            ['telephone']['validation'] = ['required-entry' => true, "validate-number"=>true, "min_text_length" =>12, "max_text_length" =>  12 ];
        }

         /* config: checkout/options/display_billing_address_on = payment_method */
        if (isset($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
            ['payment']['children']['payments-list']['children']
        )) {
            foreach ($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                     ['payment']['children']['payments-list']['children'] as $key => $payment) {
                    /* telephone */
                    $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                    ['payment']['children']['payments-list']['children'][$key]['children']['form-fields']['children']
                    ['telephone']['validation'] = ['required-entry' => true,"validate-number"=>true, "min_text_length" =>12, "max_text_length" =>  12 ];
            }
        }

        return $jsLayout;
    }
}