<?php
use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
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
                'id' => '1',
                'category' => 'educations',
                'article_count' => '8',
                'created' => '2020-04-06 18:49:24',
                'modified' => '2020-04-06 18:49:24',
            ],
            [
                'id' => '2',
                'category' => 'ICT',
                'article_count' => '0',
                'created' => '2020-04-06 18:49:24',
                'modified' => '2020-04-06 18:49:24',
            ],
            [
                'id' => '3',
                'category' => 'Raising children',
                'article_count' => '0',
                'created' => '2020-04-06 18:49:24',
                'modified' => '2020-04-06 18:49:24',
            ],
        ];

        
        $rows = $this->fetchAll('SELECT * FROM categories'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('categories');
            $table->insert($data)->save();
        }
    }
}
