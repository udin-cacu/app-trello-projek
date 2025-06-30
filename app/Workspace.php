<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    protected $table = 'workspace';
    protected $fillable = ['name','type','description'];
    protected $primaryKey = 'id';
}
