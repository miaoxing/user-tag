<?php

namespace Miaoxing\UserTag\Service;

use Miaoxing\Plugin\BaseModelV2;
use Miaoxing\Plugin\Model\HasAppIdTrait;
use Miaoxing\UserTag\Metadata\UserTagTrait;

/**
 * UserTagModel
 */
class UserTagModel extends BaseModelV2
{
    use UserTagTrait;
    use HasAppIdTrait;

    protected $data = [
        'sort' => 50,
    ];
}
