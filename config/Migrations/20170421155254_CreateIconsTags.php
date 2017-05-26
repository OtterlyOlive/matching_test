<?php
use Migrations\AbstractMigration;

class CreateIconsTags extends AbstractMigration
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
        $table = $this->table('icons_tags');
        $table->addColumn('id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('tag_id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('icon_id', 'uuid', [
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
            'icon_id',
        ], [
            'name' => 'BY_ICON_ID',
            'unique' => false,
        ]);
        $table->addPrimaryKey([
            'id',
        ]);
        $table->create();
    }
}
