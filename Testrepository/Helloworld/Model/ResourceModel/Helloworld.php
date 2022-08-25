<?php
 
namespace Testrepository\Helloworld\Model\ResourceModel;
 
class Helloworld extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init( 'testrepository_greetings', 'greetings_id' );
    }
}
