<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardDetail extends Model
{
    use HasFactory;

    protected $table = 'board_details';
    protected $fillable = ['title'];
    protected $primaryKey = 'id';
}
