<?php

use Phinx\Migration\AbstractMigration;

class Articles extends AbstractMigration
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
        $exists = $this->hasTable('articles');
        
        if (!$exists) {


            $table = $this->table('articles', ['id' => false, 'primary_key' => ['id']]);
            $table->addColumn('id', 'uuid', [
                'default' => 'UUID()',
                'limit' => null,
                'null' => false,
            ]);
            $table->addColumn('category_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ]);
            $table->addColumn('title', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('article', 'text', [
                'default' => null,
                'limit' => 4294967295,
                'null' => false,
            ]);
            $table->addColumn('published', 'smallinteger', [
                'default' => '0',
                'limit' => 1,
                'null' => false,
            ]);
            $table->addColumn('comment_count', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ]);
            $table->addColumn('view_count', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ]);
            $table->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
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
            $table->addColumn('cover_image', 'string', [
                'default' => null,
                'limit' => 200,
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
        $this->execute('DROP TABLE articles');
    }
}
