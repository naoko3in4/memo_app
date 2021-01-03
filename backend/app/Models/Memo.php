<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;

    // table名
    protected $table = 'memos';

    // カラムの指定
    protected $fillable = [
        'id', 'content'
    ];
}
