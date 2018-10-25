<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Websites extends Model
{
    protected $table = 'websites';
    protected $primaryKey = 'web_id';

    protected $fillable = ['member_id','web_name','web_url','webtype','allow_ads_type','allow_ads_count','status','created_at','updated_at'];

    protected function existDomain($memberId,$status,$domain){
        $websiteInfo = Websites::where('member_id',$memberId)->where('status',$status)->where('web_url','like','%'.$domain)->get()->toArray();
        return $websiteInfo;

    }

}
