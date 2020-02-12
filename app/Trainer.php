<?php

namespace Laradex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{ 
    //metodo para ctualizar campos
    protected $fillable = ['name','avatar'];
    /**
     * get  the route key for the model.
     * 
     * @return string 
     */
    public function getRouteKeyName()
    {
        return'slug';
    }
}
 