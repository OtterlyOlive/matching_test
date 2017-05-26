<?php
use Migrations\AbstractMigration;

class AddSeedData extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
	    $sql = <<<SQL
INSERT INTO `articles` (`id`, `title`, `content`, `created`, `modified`) VALUES
('8ffcb7c4-26ab-11e7-b347-b236f63110bc', 'Article #1', 'Article #1', '0000-00-00 00:00:00', '2017-04-21 16:02:32'),
('8ffcd1e6-26ab-11e7-b347-b236f63110bc', 'Article #2', 'Article #2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

INSERT INTO `articles_icons` (`id`, `article_id`, `icon_id`, `created`, `modified`) VALUES
('2be904ed-9705-4400-aff8-5999c23e43fd', '8ffcb7c4-26ab-11e7-b347-b236f63110bc', 'dc6fed37-3d1b-48a9-8b7a-b960b51febdb', '2017-04-21 16:02:08', '2017-04-21 16:02:08'),
('f3292961-ae13-4a74-be2d-9ecbe5ffa951', '8ffcb7c4-26ab-11e7-b347-b236f63110bc', '0cf0c40c-6361-4afe-a9e5-306101682018', '2017-04-21 16:01:56', '2017-04-21 16:01:56');

INSERT INTO `articles_tags` (`id`, `article_id`, `tag_id`, `created`, `modified`) VALUES
('c677bec9-66fe-4d9f-8455-ce070cc57bdf', '8ffcb7c4-26ab-11e7-b347-b236f63110bc', '650a511d-9c1c-4ee1-8be5-bc28d72467db', '2017-04-21 16:02:32', '2017-04-21 16:02:32');

INSERT INTO `icons` (`id`, `name`, `icon`, `created`, `modified`) VALUES
('0cf0c40c-6361-4afe-a9e5-306101682018', 'Smiley', 'smiley', '2017-04-21 16:01:56', '2017-04-21 16:01:56'),
('dc6fed37-3d1b-48a9-8b7a-b960b51febdb', 'Sad', 'sad', '2017-04-21 16:02:08', '2017-04-21 16:02:08');

INSERT INTO `icons_tags` (`id`, `tag_id`, `icon_id`, `created`, `modified`) VALUES
('25b4be24-6d5a-4778-a890-c7d72db1f499', '3cb2ea51-e02c-4de6-affc-0b60c326ac18', 'dc6fed37-3d1b-48a9-8b7a-b960b51febdb', '2017-04-21 16:02:08', '2017-04-21 16:02:08'),
('92a43a26-8a22-4dcf-9b5f-695449db6d1e', '650a511d-9c1c-4ee1-8be5-bc28d72467db', 'dc6fed37-3d1b-48a9-8b7a-b960b51febdb', '2017-04-21 16:02:08', '2017-04-21 16:02:08'),
('9d7dffa7-4905-4699-9b55-336d62e7539e', '3cb2ea51-e02c-4de6-affc-0b60c326ac18', '0cf0c40c-6361-4afe-a9e5-306101682018', '2017-04-21 16:01:56', '2017-04-21 16:01:56'),
('f1900d5f-7f0f-43d4-a72c-51b3291e8eea', '650a511d-9c1c-4ee1-8be5-bc28d72467db', '0cf0c40c-6361-4afe-a9e5-306101682018', '2017-04-21 16:01:56', '2017-04-21 16:01:56');

INSERT INTO `tags` (`id`, `name`, `created`, `modified`) VALUES
('3cb2ea51-e02c-4de6-affc-0b60c326ac18', 'Bad', '2017-04-21 16:01:35', '2017-04-21 16:01:35'),
('650a511d-9c1c-4ee1-8be5-bc28d72467db', 'Good', '2017-04-21 16:01:30', '2017-04-21 16:01:30');

INSERT INTO `tags_tag_options` (`id`, `tag_id`, `tag_option_id`, `created`, `modified`) VALUES
('1833d1ed-3a57-444e-bfa3-c24faf4d61d2', '3cb2ea51-e02c-4de6-affc-0b60c326ac18', 'db5ab97f-a30f-41f0-ab7c-2ea49dfb8b25', '2017-04-21 16:43:51', '2017-04-21 16:43:51'),
('db7bed1d-25a9-4401-932d-8bc62ac966b1', '650a511d-9c1c-4ee1-8be5-bc28d72467db', 'db5ab97f-a30f-41f0-ab7c-2ea49dfb8b25', '2017-04-21 16:43:51', '2017-04-21 16:43:51');

INSERT INTO `tag_options` (`id`, `name`, `created`, `modified`) VALUES
('db5ab97f-a30f-41f0-ab7c-2ea49dfb8b25', 'display_tag', '2017-04-21 16:43:51', '2017-04-21 16:43:51');
SQL;

	    $this->execute($sql);
    }
}
