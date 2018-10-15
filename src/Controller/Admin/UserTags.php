<?php

namespace Miaoxing\UserTag\Controller\Admin;

use Miaoxing\Admin\Action\CrudTrait;
use Miaoxing\Plugin\BaseController;

class UserTags extends BaseController
{
    use CrudTrait;

    protected $controllerName = '用户标签管理';

    public function updateUsersTagsAction($req)
    {
        foreach ((array) $req['userIds'] as $userId) {
            foreach ((array) $req['tagIds'] as $tagId) {
                wei()->userTagsUserModel()->findOrCreate([
                    'user_id' => $userId,
                    'tag_id' => $tagId,
                ]);
            }
        }

        return $this->suc();
    }
}
