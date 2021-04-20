<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'category_name'
     ];

     /**
      * Get the user that owns the Category
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     
}
