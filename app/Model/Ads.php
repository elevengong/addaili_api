<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $table = 'ads';
    protected $primaryKey = 'ads_id';

    protected $fillable = ['member_id','ads_name','ads_link','ismobile','ads_count_type','ads_time_period','ads_photo','ads_balance','ads_per_cost','ads_amount_cost','show_times','click_times','status','created_at','updated_at'];
}
