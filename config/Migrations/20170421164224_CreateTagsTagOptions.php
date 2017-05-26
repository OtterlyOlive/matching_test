<?php
use Migrations\AbstractMigration;

class CreateTagsTagOptions extends AbstractMigration
{

    public $autoId = false;

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('tags_tag_options');
        $table->addColumn('id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('tag_id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('tag_option_id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex([
            'tag_id',
        ], [
            'name' => 'BY_TAG_ID',
            'unique' => false,
        ]);
        $table->addIndex([
            'tag_option_id',
        ], [
            'name' => 'BY_TAG_OPTION_ID',
            'unique' => false,
        ]);
        $table->addPrimaryKey([
            'id',
        ]);
        $table->create();
    }
}
