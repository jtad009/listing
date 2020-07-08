<?php
namespace Directory\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ListingsCategoriesFixture
 */
class ListingsCategoriesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => 'UUID()', 'comment' => '', 'precision' => null],
        'listing_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'category_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 'f92c3c99-9038-4756-b708-66ae5db60204',
                'listing_id' => '0bf2ea2f-fa5f-481d-a33b-ae63ab9fbc83',
                'category_id' => '574ace13-fe65-4c7f-a4fc-9a20d0a05674',
                'created' => 1594204698,
            ],
        ];
        parent::init();
    }
}
