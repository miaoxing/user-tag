<?php

namespace Miaoxing\UserTag\Controller\Admin;

use Miaoxing\Admin\Action\CrudTrait;
use Miaoxing\Plugin\BaseController;
use Miaoxing\Plugin\BaseModelV2;
use Miaoxing\Plugin\Service\Request;

class UserTags extends BaseController
{
    use CrudTrait;

    protected $controllerName = '用户标签管理';

    protected function beforeSave(Request $req, BaseModelV2 $model)
    {
        $ret = wei()->event->until('beforeUserTagSave', [$model, $req]);
        return $ret ?: $this->suc();
    }

    protected function beforeDestroy(Request $req, BaseModelV2 $model)
    {
        $ret = wei()->event->until('beforeUserTagDestroy', [$model, $req]);
        return $ret ?: $this->suc();
    }

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
        $reqTagIds = $req['tagIds'] ? explode(',', $req['tagIds']) : [];
        $userTagsUsers = wei()->userTagsUserModel()->findAll(['user_id' => $req['userId']]);
        $userTagIds = $userTagsUsers->getAll('tag_id');

        $user = wei()->userModel()->findOneById($req['userId']);
        $addTagIds = array_diff($reqTagIds, $userTagIds);
        $deleteTagIds = array_diff($userTagIds, $reqTagIds);
        $ret = wei()->event->until('beforeUserTagsUserUpdate', [$user, $userTagsUsers, $addTagIds, $deleteTagIds]);
        if ($ret && $ret['code'] !== 1) {
            return $ret;
        }

        $coll = [];
        foreach ($reqTagIds as $tagId) {
            $coll[] = [
                'tagId' => $tagId,
                'userId' => $req['userId'],
            ];
        }
        $userTagsUsers->saveColl($coll);

        return $this->suc();
    }
}
