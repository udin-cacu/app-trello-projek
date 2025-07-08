<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBoardDetails extends Model
{
    use HasFactory;

    protected $table = 'user_board_details';
    protected $fillable = ['user_id', 'board_detail_id'];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function boardDetail()
    {
        return $this->belongsTo(BoardDetail::class);
    }
}
