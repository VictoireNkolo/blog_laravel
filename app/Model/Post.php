<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
