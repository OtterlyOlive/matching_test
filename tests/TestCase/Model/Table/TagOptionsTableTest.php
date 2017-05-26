<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TagOptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TagOptionsTable Test Case
 */
class TagOptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TagOptionsTable
     */
    public $TagOptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tag_options',
        'app.tags',
        'app.tags_tag_options'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TagOptions') ? [] : ['className' => 'App\Model\Table\TagOptionsTable'];
        $this->TagOptions = TableRegistry::get('TagOptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TagOptions);

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
