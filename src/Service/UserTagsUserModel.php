<?php

namespace Miaoxing\UserTag\Service;

use Miaoxing\Plugin\BaseModelV2;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\UserTag\Metadata\UserTagsUserTrait;

/**
 * UserUserTagModel
 */
class UserTagsUserModel extends BaseModelV2
{
    use UserTagsUserTrait;
    use HasAppIdTrait;
}
