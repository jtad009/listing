<?php


use Phinx\Seed\AbstractSeed;

class ReviewsSeed extends AbstractSeed
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
                'id'=> $faker->uuid(),
                'title' => 'Sterling Bank Launches Doubble.',
                'link' => 'https://www.pulse.ng/bi/finance/sterling-bank-launches-doubble-nigerias-fastest-investment-portal/6w91phe',
                'logo' => '/img/review/this-day.svg',
                'publish_date'=>'JULY 3, 2019',
                'created' => '2020-04-06 18:49:24',
                'modified' => '2020-04-06 18:49:24',
            ],
            [
                'id'=> $faker->uuid(),
                'title' => 'Sterling Bank Launches Doubble.',
                'link' => 'https://www.thisdaylive.com/index.php/2019/03/18/sterling-bank-launches-doubble-nigerias-fastest-investment-portal/',
                'logo' => '/img/review/pulse.svg',
                'publish_date'=>'JULY 3, 2019',
                'created' => '2020-04-06 18:49:24',
                'modified' => '2020-04-06 18:49:24',
            ],
            [
                'id'=> $faker->uuid(),
                'title' => 'Nigeria\'s fastest investment platform.',
                'link' => 'https://ynaija.com/sterling-bank-launches-doubble-nigerias-fastest-investment-portal/',
                'logo' => '/img/review/y-naija.svg',
                'publish_date'=>'JULY 3, 2019',
                'created' => '2020-04-06 18:49:24',
                'modified' => '2020-04-06 18:49:24',
            ],
            [
                'id'=> $faker->uuid(),
                'title' => 'An investment that pays you double (and it\'s not MMM).',
                'link' => 'https://www.pulse.ng/business/an-investment-that-pays-you-double-and-its-not-mmm/4xnbl9x',
                'logo' => '/img/review/pulse.svg',
                'publish_date'=>'JUNE 28, 2020',
                
            ],
        ];

        $rows = $this->fetchAll('SELECT * FROM reviews'); // returns PDOStatement
       
        if(count($rows) == 0){
            $table = $this->table('reviews');
            $table->insert($data)->save();
        }
    }
}
