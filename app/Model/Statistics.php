<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    protected $table = 'statistics';
    protected $primaryKey = 'statistics_id';

    protected $fillable = ['statistics_id','ip','webmaster_id','web_id','web_domain','come_url','adsmember_id','ads_id','click_status','region','region_id','city','city_id','visit_time','ismobile','vistor_system','vistor_exploer','earn_money','created_at','updated_at'];

}
