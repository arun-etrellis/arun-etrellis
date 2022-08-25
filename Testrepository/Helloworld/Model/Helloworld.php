<?php
 
namespace Testrepository\Helloworld\Model;

//use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Testrepository\Helloworld\Api\Data\HelloworldInterface;
 
class Helloworld extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Testrepository\Helloworld\Model\ResourceModel\Helloworld');
    }

}
