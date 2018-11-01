<?php

namespace Miaoxing\UserTag\Service;

use Miaoxing\Plugin\BaseService;
use Miaoxing\User\Service\UserModel;
use Wei\RetTrait;

/**
 * UserTag
 */
class UserTag extends BaseService
{
    use RetTrait;

    protected $tags = null;

    /**
     * @return UserTagModel|UserTagModel[]
     */
    public function getAll()
    {
        if ($this->tags === null) {
            $this->tags = wei()->userTagModel()->desc('sort')->indexBy('id')->findAll();
        }

        return $this->tags;
    }

    public function updateTag($addTagIds = [], $deleteTagIds = [], UserModel $users = null)
    {
        $addTagIds = (array) $addTagIds;
        $deleteTagIds = (array) $deleteTagIds;

        if (!$users) {
            $users = wei()->userModel()->findAllByIds(wei()->curUserV2->id);
        } elseif (!$users->isColl()) {
            $coll = wei()->userModel()->beColl();
            $coll[] = $users;
            $users = $coll;
        }

        $ret = wei()->event->until('beforeUserTagsUserUpdate', [$users, $addTagIds, $deleteTagIds]);
        if ($ret && $ret['code'] !== 1) {
            return $ret;
        }

        foreach ($users as $user) {
            foreach ($addTagIds as $tagId) {
                wei()->userTagsUserModel()->findOrCreate([
                    'user_id' => $user->id,
                    'tag_id' => $tagId,
                ]);
            }
        }

        return $this->suc();
    }
}
