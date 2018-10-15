<?php

namespace MiaoxingDoc\UserTag {

    /**
     * @property    \Miaoxing\UserTag\Service\UserTagModel $userTagModel UserTagModel
     * @method      \Miaoxing\UserTag\Service\UserTagModel|\Miaoxing\UserTag\Service\UserTagModel[] userTagModel()
     *
     * @property    \Miaoxing\UserTag\Service\UserTagsUserModel $userTagsUserModel UserUserTagModel
     * @method      \Miaoxing\UserTag\Service\UserTagsUserModel|\Miaoxing\UserTag\Service\UserTagsUserModel[] userTagsUserModel()
     */
    class AutoComplete
    {
    }
}

namespace {

    /**
     * @return MiaoxingDoc\UserTag\AutoComplete
     */
    function wei()
    {
    }

    /** @var Miaoxing\UserTag\Service\UserTagModel $userTagModel */
    $userTag = wei()->userTagModel();

    /** @var Miaoxing\UserTag\Service\UserTagModel|Miaoxing\UserTag\Service\UserTagModel[] $userTagModels */
    $userTags = wei()->userTagModel();

    /** @var Miaoxing\UserTag\Service\UserTagsUserModel $userTagsUserModel */
    $userTagsUser = wei()->userTagsUserModel();

    /** @var Miaoxing\UserTag\Service\UserTagsUserModel|Miaoxing\UserTag\Service\UserTagsUserModel[] $userTagsUserModels */
    $userTagsUsers = wei()->userTagsUserModel();
}
