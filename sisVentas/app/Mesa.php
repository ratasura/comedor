<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    //
    protected $table = 'mesa';

    protected $primaryKey = "id";

    public $timestamps=false;

    protected $fillable = [

    	'numeromesa',

    ];

    protected $guarded =[
    	

    ];

    
}
