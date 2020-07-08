<?php


use Phinx\Seed\AbstractSeed;

class RolesSeeder extends AbstractSeed
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
        $roles = ['SUPER_ADMIN','ADMIN'];
        $role_ids = ["14737777-cd91-3c75-8193-4b25f7ebc7bf", "1ef84b99-0703-36b5-8ba7-45c620014444"];
        for ($i = 0; $i < count($roles); $i++) {
            $data[] = [
                'id'      => $role_ids[$i],
                'role'      => $roles[$i],
                'modified'       => date('Y-m-d H:i:s'),
                'created'       => date('Y-m-d H:i:s'),
            ];
        }

        $rows = $this->fetchAll('SELECT * FROM roles'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('roles');
            $table->insert($data)->save();
        }
    }
}
