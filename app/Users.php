<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['email','role_id'];
    protected $primaryKey = 'id';

    protected $hidden = ['password',  'remember_token'];

    
}
