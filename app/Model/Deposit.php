<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $table = 'deposit';
    protected $primaryKey = 'deposit_id';
    //public $timestamps = '';

    protected $fillable = ['member_id','order_no','money','status','remark','paytype_id','payaccount','account_name','pay_ip','created_at','updated_at'];
}
