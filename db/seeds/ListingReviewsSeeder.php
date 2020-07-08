<?php


use Phinx\Seed\AbstractSeed;

class ListingReviewsSeeder extends AbstractSeed
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
        $data = [];
        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'id'      => $faker->uuid,
                'listing_id'      => $i."08f6bf9-d1f5-4f25-9246-cc0864cb95cb",
                'rating' => $i,
                'ip'=>$faker->ipv4,
                'modified'       => date('Y-m-d H:i:s'),
                'created'       => date('Y-m-d H:i:s'),
            ];
        }

        $rows = $this->fetchAll('SELECT * FROM listing_reviews'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('listing_reviews');
            $table->insert($data)->save();
        }
    }
}
