<?php

namespace MiaoxingDoc\UserTag {

    /**
     * @property    \Miaoxing\UserTag\Service\UserTagModel $userTagModel UserTagModel
     * @method      \Miaoxing\UserTag\Service\UserTagModel|\Miaoxing\UserTag\Service\UserTagModel[] userTagModel()
     *
     * @property    \Miaoxing\UserTag\Service\UserUserTagModel $userUserTagModel UserUserTagModel
     * @method      \Miaoxing\UserTag\Service\UserUserTagModel|\Miaoxing\UserTag\Service\UserUserTagModel[] userUserTagModel()
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

    /** @var Miaoxing\UserTag\Service\UserUserTagModel $userUserTagModel */
    $userUserTag = wei()->userUserTagModel();

    /** @var Miaoxing\UserTag\Service\UserUserTagModel|Miaoxing\UserTag\Service\UserUserTagModel[] $userUserTagModels */
    $userUserTags = wei()->userUserTagModel();
}
