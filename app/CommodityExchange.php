<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommodityExchange extends Model
{
    //
    protected $fillable = [
        'cename', 'ceaddress','cephone1','cephone2', 'ceemail','photo'
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Category','commodity_id');
    }
}
