<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StaticSet extends Model
{
    protected $table = 'staticset';
    protected $primaryKey = 'set_id';
    //public $timestamps = '';

    protected $fillable = ['name','nickname','value'];
}
