<?php

namespace Testrepository\FrontendCrud\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'testrepository_frontend_crud_item_collection';
    protected $_eventObject = 'item_collection';

    protected function _construct()
    {
        $this->_init('Testrepository\FrontendCrud\Model\Item', 'Testrepository\FrontendCrud\Model\ResourceModel\Item');
    }
}
