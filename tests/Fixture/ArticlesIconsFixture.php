<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticlesIconsFixture
 *
 */
class ArticlesIconsFixture extends TestFixture
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
        'icon_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'BY_ARTICLE_ID' => ['type' => 'index', 'columns' => ['article_id'], 'length' => []],
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
            'id' => '8e17f757-fbab-4104-9f3c-ea8492fbe3f8',
            'article_id' => 'd42f345a-740e-4e85-9152-fbfe964f4a1f',
            'icon_id' => 'e37f70ef-1bab-4ca3-a461-5d60ff7fd294',
            'created' => '2017-05-26 09:53:36',
            'modified' => '2017-05-26 09:53:36'
        ],
    ];
}
