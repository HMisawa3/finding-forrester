<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'book_id', 'stock', 'difference',
    ];

    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
