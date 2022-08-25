<?php

namespace Testrepository\CustomTable\Model\ResourceModel\Table;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'table_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Testrepository\CustomTable\Model\Table::class,
            \Testrepository\CustomTable\Model\ResourceModel\Table::class
        );
    }
}

