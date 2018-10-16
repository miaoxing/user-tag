<?php

namespace Miaoxing\UserTag\Migration;

use Miaoxing\Plugin\BaseMigration;

class V20181015150357CreateUserTagsUsersTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('user_tags_users')
            ->id()
            ->int('app_id')
            ->int('user_id')
            ->int('tag_id')
            ->timestamps()
            ->userstamps()
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->drop('user_tags_users');
    }
}
