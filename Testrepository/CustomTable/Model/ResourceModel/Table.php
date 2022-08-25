<?php

namespace Testrepository\CustomTable\Model\ResourceModel;

class Table extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('testrepository_customtable_table', 'table_id');
    }
}

