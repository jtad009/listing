<?php

use Phinx\Migration\AbstractMigration;

class Oauths extends AbstractMigration
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
    public function up()
    {
        $exists = $this->hasTable('oauths');
        if (!$exists) {
        $this->table('oauths', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => 'UUID()',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('short_token', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('long_token', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('refresh_token', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'timestamp', [
                'default' => '2020-04-06 18:49:24',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'timestamp', [
                'default' => '2020-04-06 18:49:24',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('userId', 'uuid', [
                'default' => 'UUID()',
                'limit' => 200,
                'null' => false,
            ])
            ->create();

            }
    }
    /**
     * Drop Database
     * @return void
     */
    public function down()
    {
        $this->execute('DROP TABLE oauths');
    }
}
