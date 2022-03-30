<?php

namespace VladAssignment\Vendor\Setup;

use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        if (!$installer->tableExists('assignment_vendor_entity')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('assignment_vendor_entity')
            )
                ->addColumn(
                    'vendor_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'nullable' => false,
                        'primary'  => true,
                        'unsigned' => true,
                    ],
                    'ID'
                )
                ->addColumn(
                    'name',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable => false'],
                    'Name'
                )
                ->addColumn(
                    'status',
                    Table::TYPE_INTEGER,
                    1,
                    [],
                    'Status'
                )
                ->addColumn(
                    'email',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable => false'],
                    'email'
                )
                ->addColumn(
                    'action',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable => false'],
                    'action'
                )
                ->setComment('Vendors Table');
            $installer->getConnection()->createTable($table);

            $installer->getConnection()->addIndex(
                $installer->getTable('assignment_vendor_entity'),
                $setup->getIdxName(
                    $installer->getTable('assignment_vendor_entity'),
                    ['name', 'status', 'email', 'action'],
                    AdapterInterface::INDEX_TYPE_FULLTEXT
                ),
                ['name', 'status', 'email', 'action'],
                AdapterInterface::INDEX_TYPE_FULLTEXT
            );
        }
        $installer->endSetup();
    }
}
