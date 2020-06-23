<?php

use Cake\Datasource\ConnectionManager;
use Migrations\AbstractMigration;

class Articles extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {

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
    /**
     * Drop Database
     * @return void
     */
    public function down()
    {
        $this->execute('DELETE FROM articles');
    }
}
