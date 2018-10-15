<?php

namespace Miaoxing\UserTag\Controller\Admin;

use Miaoxing\Admin\Action\CrudTrait;
use Miaoxing\Plugin\BaseController;

class UserTags extends BaseController
{
    use CrudTrait;

    protected $controllerName = '用户标签管理';

    protected $actionPermissions = [
        'index' => '列表',
    ];
}
