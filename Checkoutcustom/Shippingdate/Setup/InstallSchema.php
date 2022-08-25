<?php

namespace Checkoutcustom\Shippingdate\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'shipping_date',
            [
                'type' => 'datetime',
                'nullable' => false,
                'comment' => 'Shipping Date',
            ]
        );

        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order'),
            'shipping_date',
            [
                'type' => 'datetime',
                'nullable' => false,
                'comment' => 'Shipping Date',
            ]
        );

        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order_grid'),
            'shipping_date',
            [
                'type' => 'datetime',
                'nullable' => false,
                'comment' => 'Shipping Date',
            ]
        );

        $setup->endSetup();
    }
}