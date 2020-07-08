<?php
use Phinx\Seed\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
        $role_ids = ["14737777-cd91-3c75-8193-4b25f7ebc7bf", "1ef84b99-0703-36b5-8ba7-45c620014444"];
        for ($i = 0; $i < 2; $i++) {
            $data[] = [
                'role_id'=>$role_ids[$i],
                'id' => $i."08f6bf9-d1f5-4f25-9246-cc0864cb95cb",
                'username'  => $faker->userName,
                'first_name' => $faker->firstName(),
                'last_name'=>$faker->lastName(),
                'image'=>$faker->imageUrl(),
                'email'=>$faker->email,
                'password' => '$2y$10$PPDLhEoSo9qkDYl3O5s.l.mDqf6CTo6saZITbQegZaL4qi/g4xSzS',
                'created'=> date('Y-m-d H:i:s'),
            ];
        }

        
        $rows = $this->fetchAll('SELECT * FROM users'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('users');
            $table->insert($data)->save();
        }
    }
}
