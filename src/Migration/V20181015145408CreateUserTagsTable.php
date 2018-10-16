<?php

namespace Miaoxing\UserTag\Migration;

use Miaoxing\Plugin\BaseMigration;

class V20181015145408CreateUserTagsTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('user_tags')
            ->id()
            ->int('app_id')
            ->string('out_id', 64)
            ->string('name', 32)
            ->int('sort')->defaults(50)
            ->int('user_count')
            ->timestamps()
            ->userstamps()
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->drop('user_tags');
    }
}
