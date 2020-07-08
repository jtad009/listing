<?php

use Phinx\Migration\AbstractMigration;

class Users extends AbstractMigration
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
        $exists = $this->hasTable('users');
        if (!$exists) {
        $table = $this->table('users',['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'default' => 'UUID()',
            'limit' => null,
            'null' => false,
        ]);
            $table->addColumn('username', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('last_name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('created', 'timestamp', [
                'default' => '2020-04-06 18:49:24',
                'limit' => null,
                'null' => false,
            ]);
           
            $table->addColumn('password', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            
            $table->addColumn('image', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('email', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('role_id', 'uuid', [
                'default' => 'UUID()',
                'limit' => 36,
                'null' => false,
            ]);
           
            $table->addIndex(['username', 'email'], ['unique' => true]);
            $table->create();
            }
    }
    /**
     * Drop Database
     * @return void
     */
    public function down(){
        $this->execute('DROP TABLE users');
    }
}
