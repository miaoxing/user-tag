<?php

namespace Miaoxing\UserTag\Service;

use Miaoxing\Plugin\BaseModelV2;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\UserTag\Metadata\UserUserTagTrait;

/**
 * UserUserTagModel
 */
class UserUserTagModel extends BaseModelV2
{
    use UserUserTagTrait;
    use HasAppIdTrait;
}
