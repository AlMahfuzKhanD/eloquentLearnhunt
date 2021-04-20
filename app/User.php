<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
   protected $fillable = [
       'name','email'
    ];

    public function phone(){
        return $this->hasOne('App\Phone');
    }

    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    
}
