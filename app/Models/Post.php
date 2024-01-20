<?php

namespace App\Models;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasSEO;
    use HasFactory;

    protected $dates = ['deleted_at']; // 必須加這行才有軟刪除
}
