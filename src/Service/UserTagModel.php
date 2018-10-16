<?php

namespace Miaoxing\UserTag\Service;

use Miaoxing\Plugin\BaseModelV2;
use Miaoxing\UserTag\Metadata\UserTagTrait;

/**
 * UserTagModel
 */
class UserTagModel extends BaseModelV2
{
    use UserTagTrait;

    protected $data = [
        'sort' => 50,
    ];
}
