<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'desc', 'date_from', 'date_to', 'type_id', 'status'
    ];

    public function type(){
        return $this->belongsTo('App\Type');
    }

    public function tasklist(){
        return $this->hasOne('App\TaskList');
    }

    public function tasks(){
        return $this->hasMany('App\Item', 'item_id');
    }
}
