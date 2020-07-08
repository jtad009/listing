<?php

use Phinx\Migration\AbstractMigration;

class RolePrevileadges extends AbstractMigration
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
        $exists = $this->hasTable('role_previleadges');
        if (!$exists) {
        $table = $this->table('role_previleadges', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'default' => 'UUID()',
            'limit' => null,
            'null' => false,
        ]);
            $table->addColumn('previleadge_id', 'uuid', [
                'default' => 'UUID()',
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('role_id', 'uuid', [
                'default' => 'UUID()',
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('created', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ]);
            $table->addColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ]);
            
            $table->create();
            }
    }
    /**
     * Drop Database
     * @return void
     */
    public function down(){
        $this->execute('DROP TABLE role_previleadges');
    }
}
