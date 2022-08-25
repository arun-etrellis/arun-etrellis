<?php

namespace Testrepository\FrontendCrud\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;
class Item extends AbstractDb
{
    public function __construct(Context $context, $connectionName = null)
    {
        parent::__construct($context, $connectionName);
    }
    protected function _construct()
    {
        $this->_init('testrepository_frontend_crud', 'id');
    }
}
