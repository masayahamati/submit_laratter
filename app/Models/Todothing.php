<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todothing extends Model
{
    use HasFactory;
    protected $table="todothings";
    protected $fillable=[
        "deadline",
        "title",
        "detail"
    ];
    public $timestamps = false;
}
