<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'id',
        'title',
        'description',
        'created_at',
        'updated_at'
    ];
}
