<?php
namespace Users\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolePrevileadgesFixture
 */
class RolePrevileadgesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => 'UUID()', 'comment' => '', 'precision' => null],
        'previleadge_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'role_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
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
                'id' => '92366135-613e-4d90-bc0f-553be563645d',
                'previleadge_id' => '5a2205b3-7df7-4276-a6a5-24f9c01d2779',
                'created' => 1594150475,
                'modified' => 1594150475,
                'role_id' => 'd3ee6504-02e2-4312-8452-3b50b8f0ee0d',
            ],
        ];
        parent::init();
    }
}
