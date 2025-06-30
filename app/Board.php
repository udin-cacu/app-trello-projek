<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = 'board';
    protected $fillable = ['title','id_workspace','background'];
    protected $primaryKey = 'id';
}
