<?php

namespace Checkoutcustom\SortorderAddress\Block;
 
use Magento\Checkout\Block\Checkout\LayoutProcessorInterface;
 
class LayoutProcessor implements LayoutProcessorInterface
{
    /**
     * Reposition postcode to be above city input, and country drop down to be above region
     * 
     * @param array $jsLayout
     * @return array
     */
    public function process($jsLayout)
    {
        $jsLayout['components']['checkout']['children']['steps']['children']
        ['billing-step']['children']['payment']['children']
        ['payments-list']['children']['checkmo-form']['children']
        ['form-fields']['children']['city']['sortOrder'] = 71;

        $jsLayout['components']['checkout']['children']['steps']['children']
        ['billing-step']['children']['payment']['children']
        ['payments-list']['children']['checkmo-form']['children']
        ['form-fields']['children']['postcode']['sortOrder'] = 72;

        $jsLayout['components']['checkout']['children']['steps']['children']
        ['billing-step']['children']['payment']['children']
        ['payments-list']['children']['checkmo-form']['children']
        ['form-fields']['children']['telephone']['sortOrder'] = 73;
 
 
        $jsLayout['components']['checkout']['children']['steps']['children']
        ['billing-step']['children']['payment']['children']
        ['payments-list']['children']['checkmo-form']['children']
        ['form-fields']['children']['country_id']['sortOrder'] = 81;
 
        return $jsLayout;
    }
}
