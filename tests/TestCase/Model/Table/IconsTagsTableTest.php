<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IconsTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IconsTagsTable Test Case
 */
class IconsTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IconsTagsTable
     */
    public $IconsTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.icons_tags',
        'app.tags',
        'app.icons',
        'app.articles',
        'app.articles_icons',
        'app.articles_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IconsTags') ? [] : ['className' => 'App\Model\Table\IconsTagsTable'];
        $this->IconsTags = TableRegistry::get('IconsTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IconsTags);

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
