<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model{
    use SoftDeletes;

    protected $table = 'books';
    protected $fillable = [
        "judul", "pengarang"
    ];

    protected $guarded = ['kd_buku'];
}