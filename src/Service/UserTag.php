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

    public function getAll()
    {
        if ($this->tags === null) {
            $this->tags = wei()->userTagModel()->desc('sort')->indexBy('id')->findAll();
        }

        return $this->tags;
    }

    public function addTag($addTagIds = [], UserModel $users = null)
    {
        if (!$users) {
            $users = wei()->userModel()->findAllByIds(wei()->curUserV2->id);
        }

        $ret = wei()->event->until('beforeUserTagsUserUpdate', [$users, $addTagIds, []]);
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
