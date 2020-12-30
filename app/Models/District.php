<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
class District extends Model
{
    protected $table = 'districts';
    protected $appends = ['city'];
    protected $hidden = ['city_id'];


    function getCityAttribute(){
        return City::where('id',$this->attributes['city_id'])->first();
    }
}
