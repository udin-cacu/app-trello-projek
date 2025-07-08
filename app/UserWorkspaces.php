<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkspaces extends Model
{
    use HasFactory;

    protected $table = 'user_workspaces';
    protected $fillable = ['user_id'];
    protected $primaryKey = 'id';
}
