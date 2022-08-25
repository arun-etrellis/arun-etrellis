<?php 
namespace Testrepository\Helloworld\Controller\Crud;
 
use Magento\Framework\App\Action\Context;
 
class Update extends \Magento\Framework\App\Action\Action
{
    protected $scopeConfig;
 
    public function __construct(
        Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
 
        parent::__construct($context);
    }
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
 
        $params = $this->getRequest()->getParams();
        $model  = $this->_objectManager->create('Testrepository\Helloworld\Model\Helloworld');
		
		$model->load( $params['greetings_id'] );
        $model->setGreetingText( $params['greeting_text'] );
        $model->save();
 
        return $resultRedirect->setPath('hellocrud/index/index');
    }
}
