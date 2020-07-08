<?php


use Phinx\Seed\AbstractSeed;

class RolePrevileadgesSeeder extends AbstractSeed
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
        $data = [
            [
                'id' => $faker->uuid,
                'role_id' => '14737777-cd91-3c75-8193-4b25f7ebc7bf',
                'previleadge_id' => '20af05ed-76d3-327e-8c96-f1b29d4d26e2',
                'modified'=> date('Y-m-d H:i:s'),
                'created'=> date('Y-m-d H:i:s'),
            ],
            [
                'id' => $faker->uuid,
                'role_id' => '14737777-cd91-3c75-8193-4b25f7ebc7bf',
                'previleadge_id' => '3cce011a-021c-3818-8d43-217218c7b27e',
                'modified'=> date('Y-m-d H:i:s'),
                'created'=> date('Y-m-d H:i:s'),
            ],
            [
                'id' => $faker->uuid,
                'role_id' => '14737777-cd91-3c75-8193-4b25f7ebc7bf',
                'previleadge_id' => '7b647c68-0e1a-3d50-a038-d42a71b31b8a',
                'modified'=> date('Y-m-d H:i:s'),
                'created'=> date('Y-m-d H:i:s'),
            ],
            [
                'id' => $faker->uuid,
                'role_id' => '14737777-cd91-3c75-8193-4b25f7ebc7bf',
                'previleadge_id' => '8adef566-ffec-3698-bf4b-402635d81999',
                 'modified'=> date('Y-m-d H:i:s'),
                'created'=> date('Y-m-d H:i:s'),
            ],
            [
                'id' => $faker->uuid,
                'role_id' => '14737777-cd91-3c75-8193-4b25f7ebc7bf',
                'previleadge_id' => 'a3de260d-3361-33f2-84ac-4bfef2186bce',
                'modified'=> date('Y-m-d H:i:s'),
                'created'=> date('Y-m-d H:i:s'),
            ]
        ];
        $adminDate = [
            [
                'id' => $faker->uuid,
                'role_id' => '14737777-cd91-3c75-8193-4b25f7ebc7bf',
                'previleadge_id' => '1ef84b99-0703-36b5-8ba7-45c620014444',
                'modified'=> date('Y-m-d H:i:s'),
                'created'=> date('Y-m-d H:i:s'),
            ],
            [
                'id' => $faker->uuid,
                'role_id' => '14737777-cd91-3c75-8193-4b25f7ebc7bf',
                'previleadge_id' => '3cce011a-021c-3818-8d43-217218c7b27e',
                'modified'=> date('Y-m-d H:i:s'),
                'created'=> date('Y-m-d H:i:s'),
            ],
           
           
            
        ];
        $rows = $this->fetchAll('SELECT * FROM role_previleadges'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('role_previleadges');
            $table->insert($data)->save();
            $table->insert($adminDate)->save();
        }
    }
}
