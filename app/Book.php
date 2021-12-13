<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'user_id','title','author','type', 'image',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function stock()
    {
        return $this->hasOne('App\Stock');
    }
}
