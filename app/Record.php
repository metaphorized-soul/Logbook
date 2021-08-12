<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table='records';
    
    protected $guarded=[];
    public function user(){
        return $this->belongsTo(\App\User::class);
    }

    public function getUserName() {
   return User::where('id', $this->user_id)->first()->name;
}
}
