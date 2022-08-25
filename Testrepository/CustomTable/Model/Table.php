<?php

namespace Testrepository\CustomTable\Model;

use Testrepository\CustomTable\Api\Data\TableInterface;
use Testrepository\CustomTable\Api\Data\TableInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;

class Table extends \Magento\Framework\Model\AbstractModel
{

    protected $tableDataFactory;

    protected $dataObjectHelper;

    protected $_eventPrefix = 'testrepository_customtable_table';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param TableInterfaceFactory $tableDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \Testrepository\CustomTable\Model\ResourceModel\Table $resource
     * @param \Testrepository\CustomTable\Model\ResourceModel\Table\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        TableInterfaceFactory $tableDataFactory,
        DataObjectHelper $dataObjectHelper,
        \Testrepository\CustomTable\Model\ResourceModel\Table $resource,
        \Testrepository\CustomTable\Model\ResourceModel\Table\Collection $resourceCollection,
        array $data = []
    ) {
        $this->tableDataFactory = $tableDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve table model with table data
     * @return TableInterface
     */
    public function getDataModel()
    {
        $tableData = $this->getData();
        
        $tableDataObject = $this->tableDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $tableDataObject,
            $tableData,
            TableInterface::class
        );
        
        return $tableDataObject;
    }
}

