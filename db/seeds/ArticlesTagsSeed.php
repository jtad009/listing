<?php
use Phinx\Seed\AbstractSeed;

/**
 * ArticlesTags seed.
 */
class ArticlesTagsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '6',
                'article_id' => '059c2775-40ea-4686-b7f5-61b43dea2738',
                'tag_id' => '3',
                'created' => '2020-04-06 18:49:24',
            ],
            [
                'id' => '7',
                'article_id' => '059c2775-40ea-4686-b7f5-61b43dea2738',
                'tag_id' => '4',
                'created' => '2020-04-06 18:49:24',
            ],
            [
                'id' => '8',
                'article_id' => '059c2775-40ea-4686-b7f5-61b43dea2738',
                'tag_id' => '5',
                'created' => '2020-04-06 18:49:24',
            ],
        ];

        
        $rows = $this->fetchAll('SELECT * FROM articles_tags'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('articles_tags');
            $table->insert($data)->save();
        }
    }
}
