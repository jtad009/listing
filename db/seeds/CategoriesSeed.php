<?php
use Phinx\Seed\AbstractSeed;
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
        $faker = Faker\Factory::create();
        $data = [];
        $unpublished = true;
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'id'      => $faker->uuid,
                'category'      => $faker->userName,
                'listing_count' => $i,
                'unpublished'         => !$unpublished,
                'created'       => date('Y-m-d H:i:s'),
                'modified'       => date('Y-m-d H:i:s'),
            ];
        }

       

        
        $rows = $this->fetchAll('SELECT * FROM categories'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('categories');
            $table->insert($data)->save();
        }
    }
}
