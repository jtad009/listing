<?php
namespace Directory\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ListingImagesFixture
 */
class ListingImagesFixture extends TestFixture
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
        'path' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => '2020-04-06 18:49:24', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => '2020-04-06 18:49:24', 'comment' => '', 'precision' => null],
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
                'id' => 'e0ffd8f0-dbf8-437b-9ad0-27e8f899db71',
                'listing_id' => '42901c1d-19a4-46e8-9afb-4961b0f858aa',
                'path' => 'Lorem ipsum dolor sit amet',
                'created' => 1594155145,
                'modified' => 1594155145,
            ],
        ];
        parent::init();
    }
}
