<?php
use Phinx\Seed\AbstractSeed;

/**
 * Tags seed.
 */
class TagsSeed extends AbstractSeed
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
                'id' => '2',
                'tag' => 'schoolse',
                'created' => '2020-04-06 18:49:24',
                'modified' => '2020-04-06 18:49:24',
            ],
            [
                'id' => '3',
                'tag' => 'make money in nigeria',
                'created' => '2020-04-06 18:49:24',
                'modified' => '2020-04-06 18:49:24',
            ],
            [
                'id' => '4',
                'tag' => 'skole affilate',
                'created' => '2020-04-06 18:49:24',
                'modified' => '2020-04-06 18:49:24',
            ],
        ];

        $rows = $this->fetchAll('SELECT * FROM tags'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('tags');
            $table->insert($data)->save();
        }
        
    }
}
