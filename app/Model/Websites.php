<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Websites extends Model
{
    protected $table = 'websites';
    protected $primaryKey = 'web_id';

    protected $fillable = ['member_id','web_name','web_url','webtype','allow_ads_type','allow_ads_count','status','created_at','updated_at'];
}
