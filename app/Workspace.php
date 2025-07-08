<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    protected $table = 'workspace';
    protected $fillable = ['name','type','description'];
    protected $primaryKey = 'id';

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_workspaces');
    }
}
