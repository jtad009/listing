<?php
use Migrations\AbstractMigration;

class Categories extends AbstractMigration
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
        $table = $this->table('categories');
            $table->addColumn('category', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ]);
            $table->addColumn('article_count', 'integer', [
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
            $table->create();
    }
    /**
     * Drop Database
     * @return void
     */
    public function down()
    {
        $this->execute('DELETE FROM categories');
       
    }
}
