<?php

namespace Miaoxing\UserTag\Metadata;

/**
 * UserUserTagTrait
 *
 * @property int $id
 * @property int $appId
 * @property int $userId
 * @property int $tagId
 * @property string $createdAt
 * @property string $updatedAt
 */
trait UserUserTagTrait
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
    ];
}
