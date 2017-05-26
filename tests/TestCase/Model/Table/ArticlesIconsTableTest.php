<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticlesIconsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticlesIconsTable Test Case
 */
class ArticlesIconsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArticlesIconsTable
     */
    public $ArticlesIcons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.articles_icons',
        'app.articles',
        'app.icons',
        'app.tags',
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
        $config = TableRegistry::exists('ArticlesIcons') ? [] : ['className' => 'App\Model\Table\ArticlesIconsTable'];
        $this->ArticlesIcons = TableRegistry::get('ArticlesIcons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArticlesIcons);

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
