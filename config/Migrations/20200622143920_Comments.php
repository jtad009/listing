<?php
use Migrations\AbstractMigration;

class Comments extends AbstractMigration
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
    /**
     * Drop Database
     * @return void
     */
    public function down()
    {
        $this->execute("DELETE FROM comments");
    }
}
