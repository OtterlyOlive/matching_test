<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IconsTagsFixture
 *
 */
class IconsTagsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'tag_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'icon_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'BY_TAG_ID' => ['type' => 'index', 'columns' => ['tag_id'], 'length' => []],
            'BY_ICON_ID' => ['type' => 'index', 'columns' => ['icon_id'], 'length' => []],
        ],
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
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '49102221-6a3f-4435-84ec-6e7c0b9c3726',
            'tag_id' => 'cf77f9e4-e5c6-4940-9bd3-a4762c8ed7be',
            'icon_id' => '334e62e4-1f85-4013-9d92-c33496ed9bbc',
            'created' => '2017-05-26 09:53:36',
            'modified' => '2017-05-26 09:53:36'
        ],
    ];
}
