<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calendar extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at']; // 必須加這行才有軟刪除

    public function booker(): BelongsTo
    {

        return $this->belongsTo(Booker::class);//一個預約日期只能有一個預約者

    }
}
