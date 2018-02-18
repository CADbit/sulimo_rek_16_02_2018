<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'user_id', 'item_id', 'active'
    ];

    public function color(){
        return $this->hasManyThrough('App\Type', 'App\Item', 
    		'type_id',
    		'id',
    		'id',
    		'item_id');
    }

    public function item(){
        return $this->belongsTo('App\Item');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
