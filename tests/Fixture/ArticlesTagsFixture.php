<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticlesTagsFixture
 *
 */
class ArticlesTagsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'article_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'tag_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'BY_ARTICLE_ID' => ['type' => 'index', 'columns' => ['article_id'], 'length' => []],
            'BY_TAG_ID' => ['type' => 'index', 'columns' => ['tag_id'], 'length' => []],
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
            'id' => '64fadd3c-78aa-40ac-b877-00796367c4ee',
            'article_id' => '506e6742-a2d1-4ca1-9513-8fc1c6444bc5',
            'tag_id' => 'c4b18728-5beb-4954-b3a7-300034e2494b',
            'created' => '2017-05-26 09:53:36',
            'modified' => '2017-05-26 09:53:36'
        ],
    ];
}
