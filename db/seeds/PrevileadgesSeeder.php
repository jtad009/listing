<?php


use Phinx\Seed\AbstractSeed;

class PrevileadgesSeeder extends AbstractSeed
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
        $rights = ['CREATE_LISTING','VIEW_LISTING', 'EDIT_LISTING', 'APPROVE_LISTING', 'EDIT_LISTING'];
        for ($i = 0; $i < count($rights); $i++) {
            $data[] = [
                'id'      => $faker->uuid,
                'previleadges'      => $rights[$i],
                'modified'       => date('Y-m-d H:i:s'),
                'created'       => date('Y-m-d H:i:s'),
            ];
        }

        $rows = $this->fetchAll('SELECT * FROM previleadges'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('previleadges');
            $table->insert($data)->save();
        }
    
    }
}
