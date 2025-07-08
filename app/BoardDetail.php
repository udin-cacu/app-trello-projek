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


    public function users()
    {
        return $this->belongsToMany(User::class, 'user_board_details', 'board_detail_id', 'user_id');
    }


}
