<?php

namespace Checkoutcustom\Salesman\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Job extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('salesman_job', 'job_id');
    }
}
