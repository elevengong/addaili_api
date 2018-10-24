<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'member_id';
    //public $timestamps = '';

    protected $fillable = ['name','pwd','type','qq','balance','frozen','status','login_ip','lastlogined_at'];
}
