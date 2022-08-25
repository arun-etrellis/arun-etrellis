<?php

namespace Checkoutcustom\Salesman\Model;

use Magento\Framework\Model\AbstractModel;
use Checkoutcustom\Salesman\Model\ResourceModel\Job as JobResourceModel;

class Job extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(JobResourceModel::class);
    }
}
