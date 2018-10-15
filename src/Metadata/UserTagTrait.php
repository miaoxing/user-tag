<?php

namespace Miaoxing\UserTag\Metadata;

/**
 * UserTagTrait
 *
 * @property int $id
 * @property int $appId
 * @property string $outId
 * @property string $name
 * @property int $sort
 * @property string $createdAt
 * @property string $updatedAt
 * @property int $createdBy
 * @property int $updatedBy
 */
trait UserTagTrait
{
    /**
     * @var array
     * @see CastTrait::$casts
     */
    protected $casts = [
        'id' => 'int',
        'app_id' => 'int',
        'out_id' => 'string',
        'name' => 'string',
        'sort' => 'int',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'created_by' => 'int',
        'updated_by' => 'int',
    ];
}
