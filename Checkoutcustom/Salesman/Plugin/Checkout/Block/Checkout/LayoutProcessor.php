<?php

namespace Checkoutcustom\Salesman\Plugin\Checkout\Block\Checkout;

use Magento\Directory\Helper\Data as DirectoryHelper;

/**
 * Class LayoutProcessor
 * @package Checkoutcustom\Salesman\Plugin\Block\Checkout
 */

class LayoutProcessor 
{
    /**
     * @var DirectoryHelper
     */
   // protected $directoryHelper;

     /***
    * State Option
    *
    * @var Checkoutcustom\Salesman\Model\Source\Stateoptions
    */

    protected $_stateOption; 


    public function __construct(
        \Checkoutcustom\Salesman\Model\Source\Stateoptions $stateOption,
        DirectoryHelper $directoryHelper
    ) {
        //$this->directoryHelper = $directoryHelper;
        $this->_stateOption    = $stateOption;
    }


    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {

       

        $shippingAddressFieldSet['job_id'] = '';
        $shippingAddressFieldSet['name'] = '';

         $region = $this->_stateOption->getSalesman();  
            $regionOptions[] = ['label' => 'Please Select..', 'value' => ''];
             foreach ($region as $field) {
                $regionOptions[] = ['label' => $field['name'], 'value' => $field['name']];
                }
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['shipping-address-fieldset']['children']['region'] = [
            'component' => 'Magento_Ui/js/form/element/select',
            'config' => [
                'customScope' => 'shippingAddress.custom_attributes',
                'template' => 'ui/form/field',
                'elementTmpl' => 'ui/form/element/select',
                'id' => 'drop-down',
                'additionalClasses' => 'state-drop-down',
            ],
            'dataScope' => 'shippingAddress.custom_attributes.sales_man',
            'label' => 'Sales Man',
            'provider' => 'checkoutProvider',
            'visible' => true,
            'validation' => [],
            'sortOrder' => 299,
            'id' => 'state-drop-down',
            'options' => $regionOptions
            

        ];
 
 
        return $jsLayout;
    }
}