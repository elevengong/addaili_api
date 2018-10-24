<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $table = 'withdraw';
    protected $primaryKey = 'withdraw_id';
    //public $timestamps = '';

    protected $fillable = ['member_id','order_no','money','status','remark','paytype_id','withdraw_account','account_name','apply_withdraw_ip','created_at','updated_at'];
}
