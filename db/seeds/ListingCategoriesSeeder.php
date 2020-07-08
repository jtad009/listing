<?php


use Phinx\Seed\AbstractSeed;

class ListingCategoriesSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $categories = ['025b0225-450c-330b-8c52-ae98f5a7c1de',
       '369eea28-04aa-38fa-a2bc-030b13cd1ad3',
       '3e031f9b-0af0-3092-afb6-4fdf66746e70',
       '48238b92-8252-3d4c-9fbc-7c641f1b25aa',
       '5a01dc9b-41b2-3fc8-9dc0-a0cb3869a134',
       '5ab5810e-b58f-3009-993e-ab9e4e10b7d6',
       '75813d45-0f62-3400-a12c-93b2edfaace5',
       '8429521b-e91c-3dc1-8fb9-a7e43113cd80',
       'b8e2cb16-a0ee-3004-afde-da2467a93946',
       'e19bb6a9-b801-3197-8895-6f81dac47eea'];
       $listing = [
       '008f6bf9-d1f5-4f25-9246-cc0864cb95cb',
       '108f6bf9-d1f5-4f25-9246-cc0864cb95cb',
       '208f6bf9-d1f5-4f25-9246-cc0864cb95cb',
       '308f6bf9-d1f5-4f25-9246-cc0864cb95cb',
       '408f6bf9-d1f5-4f25-9246-cc0864cb95cb'
       ];
        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                
                'id' => $faker->uuid,
                'listing_id'  => $listing[$i],
                'category_id' => $categories[$i],
                'created'=> date('Y-m-d H:i:s'),
            ];
        }
        $r = 4;
        for ($i = 0; $i < 5; $i++) {
            $r++;
            $datas[] = [
                
                'id' => $faker->uuid,
                'listing_id'  => $listing[$i],
                'category_id' => $categories[$r],
                'created'=> date('Y-m-d H:i:s'),
            ];
        }
   
        $rows = $this->fetchAll('SELECT * FROM listings_categories'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('listings_categories');
            $table->insert($data)->save();
            $table->insert($datas)->save();
        }
    }
}
