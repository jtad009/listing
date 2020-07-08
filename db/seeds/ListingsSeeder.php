<?php


use Phinx\Seed\AbstractSeed;

class ListingsSeeder extends AbstractSeed
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
        
        for ($i = 1; $i < 5; $i++) {
            $data[] = [
                'id' => $i."08f6bf9-d1f5-4f25-9246-cc0864cb95cb",
                'business_name'  => $faker->text(10),
                'description' => $faker->text(),
                'url'=>$faker->url,
                'email'=>$faker->email,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'state_id'=>$i,
                'modified'       => date('Y-m-d H:i:s'),
                'created'       => date('Y-m-d H:i:s'),
            ];
        }

        $rows = $this->fetchAll('SELECT * FROM listings'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('listings');
            $table->insert($data)->save();
        }
    }
}
