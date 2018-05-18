<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model{
    use SoftDeletes;

    protected $table = 'categories';
    protected $fillable = [
        "nama"
    ];

    protected $guarded = ['id'];
}