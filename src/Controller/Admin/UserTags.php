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

    public function replaceUserTagsAction($req)
    {
        $coll = [];
        if ($req['tagIds']) {
            foreach (explode(',', $req['tagIds']) as $tagId) {
                $coll[] = [
                    'tagId' => $tagId,
                    'userId' => $req['userId'],
                ];
            }
        }

        $userTagsUsers = wei()->userTagsUserModel()->findAll(['user_id' => $req['userId']]);
        $userTagsUsers->saveColl($coll);

        return $this->suc();
    }
}
