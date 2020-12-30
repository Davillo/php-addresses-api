<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
class Address extends Model
{

    protected $table = 'addresses';
    protected $appends = ['district'];
    protected $hidden = ['district_id','type'];

    function getDistrictAttribute(){
        return District::where('id',$this->attributes['district_id'])->first();
    }

}
