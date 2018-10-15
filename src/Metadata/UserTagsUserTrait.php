<?php

namespace Miaoxing\UserTag\Metadata;

/**
 * UserTagsUserTrait
 *
 * @property int $id
 * @property int $appId
 * @property int $userId
 * @property int $tagId
 * @property string $createdAt
 * @property string $updatedAt
 * @property int $createdBy
 * @property int $updatedBy
 */
trait UserTagsUserTrait
{
    /**
     * @var array
     * @see CastTrait::$casts
     */
    protected $casts = [
        'id' => 'int',
        'app_id' => 'int',
        'user_id' => 'int',
        'tag_id' => 'int',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'created_by' => 'int',
        'updated_by' => 'int',
    ];
}
