<?php

namespace Checkoutcustom\Salesman\Model\ResourceModel\Job;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Checkoutcustom\Salesman\Model\Job as JobModel;
use Checkoutcustom\Salesman\Model\ResourceModel\Job as JobResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            JobModel::class,
            JobResourceModel::class
        );
    }
}
