<?php

namespace Digiteon\Salesman\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    // @codingStandardsIgnoreStart
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    // @codingStandardsIgnoreEnd
    {
        $installer = $setup;
        $installer->startSetup();
        if (!$installer->tableExists('salesman_job')) {
            $tableName = $installer->getTable('salesman_job');
            $table = $installer->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'job_id',
                    Table::TYPE_INTEGER,
                    10,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'Job Id'
                )
                ->addColumn(
                    'name',
                    Table::TYPE_TEXT,
                    255,
                    [
                        'nullable' => true,
                        'default' => null
                    ],
                    'Name'
                )
                ->addColumn(
                    'status',
                    Table::TYPE_SMALLINT,
                    null,
                    [
                        'nullable' => true,
                        'default' => null
                    ],
                    'Status'
                )
                ->addIndex(
                    $installer->getIdxName('salesman_job', ['job_id']),
                    ['job_id']
                )
                ->setComment('Digiteon Salesman')
                ->setOption('type', 'InnoDB')
                ->setOption('charset', 'utf8');
            $installer->getConnection()->createTable($table);
        }

        $setup->startSetup();

        $quote = $setup->getTable('quote');
        $salesOrder = $setup->getTable('sales_order');
        
        
        $setup->getConnection()->addColumn(
            $quote,
            'sales_man',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'nullable' => true,
                'comment' =>'Sales Man Name'
            ]
        );
        
        $setup->getConnection()->addColumn(
            $salesOrder,
            'sales_man',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'nullable' => true,
                'comment' =>'Sales Man Name'
            ]
        );
        
        $installer->endSetup();
    }
}
