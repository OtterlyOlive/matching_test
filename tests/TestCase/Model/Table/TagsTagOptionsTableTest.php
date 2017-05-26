<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TagsTagOptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TagsTagOptionsTable Test Case
 */
class TagsTagOptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TagsTagOptionsTable
     */
    public $TagsTagOptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tags_tag_options',
        'app.tags',
        'app.articles',
        'app.icons',
        'app.articles_icons',
        'app.icons_tags',
        'app.articles_tags',
        'app.tag_options'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TagsTagOptions') ? [] : ['className' => 'App\Model\Table\TagsTagOptionsTable'];
        $this->TagsTagOptions = TableRegistry::get('TagsTagOptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TagsTagOptions);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
