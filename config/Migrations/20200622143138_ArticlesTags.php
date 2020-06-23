<?php
use Migrations\AbstractMigration;

class ArticlesTags extends AbstractMigration
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
        $table = $this->table('articles_tags');
            $table->addColumn('article_id', 'uuid', [
                'default' => 'UUID()',
                'limit' => null,
                'null' => false,
            ]);
            $table->addColumn('tag_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ]);
            $table->addColumn('created', 'timestamp', [
                'default' => '2020-04-06 18:49:24',
                'limit' => null,
                'null' => true,
            ]);
            $table->create();

        
    }
    /**
     * Drop Database
     * @return void
     */
    public function down()
    {
        $this->execute('DELETE FROM articles_tags');
    }
}
