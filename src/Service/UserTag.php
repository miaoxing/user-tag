<?php

namespace Miaoxing\UserTag\Service;

use Miaoxing\Plugin\BaseService;

/**
 * UserTag
 */
class UserTag extends BaseService
{
    protected $tags = null;

    public function getAll()
    {
        if ($this->tags === null) {
            $this->tags = wei()->userTagModel()->desc('sort')->indexBy('id')->findAll();
        }

        return $this->tags;
    }
}
