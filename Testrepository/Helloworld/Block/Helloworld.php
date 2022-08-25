<?php
 
namespace Testrepository\Helloworld\Block;
 
use Magento\Framework\View\Element\Template;
 
class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function __construct( \Magento\Framework\View\Element\Template\Context $context )
    {
        parent::__construct($context);
    }
 
    protected function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('My Greetings'));
    }
 
    public function getGreetings()
    {
        $this->_isScopePrivate = true;
 
        $objectManagerr   = \Magento\Framework\App\ObjectManager::getInstance();
 
        $greetingsFactory = $objectManagerr->create( 'Testrepository\Helloworld\Model\Helloworld' );
 
        $data             = $greetingsFactory ->getCollection();
 		
        return $data;
    }
	
	/*public function getProducts() 
	{
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();

		$productCollection = $objectManager->create('Magento\Catalog\Model\ResourceModel\Product\Collection');
		$collection = $productCollection->addAttributeToSelect('*')->load();
		
		return $collection;
	}*/
}
