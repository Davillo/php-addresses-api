<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
class City extends Model
{
    protected $table = 'cities';
    protected $appends = ['state'];
    protected $hidden = ['state_id'];

    function getStateAttribute(){
        return State::where('id', $this->attributes['state_id'])->first();
    }

}
