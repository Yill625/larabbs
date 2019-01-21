<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{

    public function scopeUpdatedAtDesc($query)
    {
        // 此时会自动触发框架对数据模型 updated_at 时间戳的更新
        return $query->orderBy('updated_at', 'desc');
    }

    public function scopeCreatedAtDesc($query)
    {
        // 按照创建时间排序
        return $query->orderBy('created_at', 'desc');
    }

}
