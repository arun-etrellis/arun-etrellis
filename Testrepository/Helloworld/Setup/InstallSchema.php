<?php
 
namespace Testrepository\Helloworld\Setup;
  
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
  
class InstallSchema implements InstallSchemaInterface
{
    public function install( SchemaSetupInterface $setup, ModuleContextInterface $context )
    {
        $setup->startSetup();
  
        $table = $setup->getConnection()->newTable(
            $setup->getTable('testrepository_greetings')
        )->addColumn(
            'greetings_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Greetings ID'
        )->addColumn(
            'greeting_text',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Greeting Text'
        )->setComment(
            'Greetings Table'
        );
        $setup->getConnection()->createTable($table);
  
        $setup->endSetup();
	}
}