<?php

use Phinx\Migration\AbstractMigration;

class Reviews extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $exists = $this->hasTable('reviews');
        
        if (!$exists) {

        $this->table('reviews', ['id' => false, 'primary_key' => ['id']])
        ->addColumn('id', 'uuid', [
            'default' => 'UUID()',
            'limit' => null,
            'null' => false,
        ])
        ->addColumn('title', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ])
        ->addColumn('link', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ])
        ->addColumn('publish_date', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ])
        ->addColumn('logo', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ])
        ->addColumn('created', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'limit' => null,
            'null' => false,
        ])
        ->addColumn('modified', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'limit' => null,
            'null' => false,
        ])
        ->create();
        }
    }
}
