<?php

namespace Checkoutcustom\Salesman\Model\Source;


class Stateoptions implements \Magento\Framework\Option\ArrayInterface
{
    public function __construct(
        \Magento\Framework\App\ResourceConnection $resource
    ) {
        $this->_resource = $resource;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $optionArray = [];
         foreach ($this->getSalesman() as $field) {
            $options[] = ['label' => $field['name'], 'value' => $field['job_id']];
        }
        return $options;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [0 => __('No'), 1 => __('Yes')];
    }
    public function getSalesman()
    {
        $adapter = $this->_resource->getConnection(\Magento\Framework\App\ResourceConnection::DEFAULT_CONNECTION);
        $select = $adapter->select()
                    ->from('salesman_job')->where('status', 1); 
        return $adapter->fetchAll($select);
    }
}