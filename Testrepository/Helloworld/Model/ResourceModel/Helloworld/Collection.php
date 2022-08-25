<?php
 
namespace Testrepository\Helloworld\Model\ResourceModel\Helloworld;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Testrepository\Helloworld\Model\Helloworld',
            'Testrepository\Helloworld\Model\ResourceModel\Helloworld'
        );
    }
}
