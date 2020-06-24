<?php

use Phinx\Migration\AbstractMigration;

class Comments extends AbstractMigration
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
        $exists = $this->hasTable('comments');
        if (!$exists) {
        $table = $this->table('comments', ['id' => false, 'primary_key' => ['id']]);
            $table->addColumn('id', 'uuid', [
                'default' => 'UUID()',
                'limit' => null,
                'null' => false,
            ]);
            $table->addColumn('article_id', 'uuid', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ]);
            $table->addColumn('comment', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ]);
            $table->addColumn('published', 'smallinteger', [
                'default' => '0',
                'limit' => 1,
                'null' => false,
            ]);
            $table->addColumn('name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('email', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('website', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('created', 'timestamp', [
                'default' => '2020-04-06 18:49:24',
                'limit' => null,
                'null' => false,
            ]);
            $table->addColumn('modified', 'timestamp', [
                'default' => '2020-04-06 18:49:24',
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
    public function down()
    {
        $this->execute("DELETE FROM comments");
    }
}
