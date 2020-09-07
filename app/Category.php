<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'ctname', 'ctdescription','commodity_id'
    ];

    public function commodityexchanges()
    {
        return $this->belongsToMany('App\CommodityExchange');
    }
}
