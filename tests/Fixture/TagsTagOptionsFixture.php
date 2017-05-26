<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TagsTagOptionsFixture
 *
 */
class TagsTagOptionsFixture extends TestFixture
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
        'tag_option_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'BY_TAG_ID' => ['type' => 'index', 'columns' => ['tag_id'], 'length' => []],
            'BY_TAG_OPTION_ID' => ['type' => 'index', 'columns' => ['tag_option_id'], 'length' => []],
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
            'id' => '58bf186c-192f-4773-b0f4-e69bbb3cb549',
            'tag_id' => '349741fc-76d0-4fd0-b1c9-6f3bf2f6d50a',
            'tag_option_id' => 'ca59a246-b971-4d37-8af2-2cb7d3c05a16',
            'created' => '2017-05-26 09:53:37',
            'modified' => '2017-05-26 09:53:37'
        ],
    ];
}
