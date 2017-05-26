<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IconsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IconsTable Test Case
 */
class IconsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IconsTable
     */
    public $Icons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.icons',
        'app.articles',
        'app.articles_icons',
        'app.tags',
        'app.articles_tags',
        'app.icons_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Icons') ? [] : ['className' => 'App\Model\Table\IconsTable'];
        $this->Icons = TableRegistry::get('Icons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Icons);

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
}
