<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'member_id';
    //public $timestamps = '';
    protected $fillable = ['name','pwd','type','qq','balance','frozen','status','login_ip','lastlogined_at'];

    //通过member_id获取对应的广告商或者站长的信息 type:1为广告商 2:站长
    protected function getMemberByMemberId($memberId,$memberType=1){
        $memberInfo = Member::where('member_id',$memberId)->where('type',$memberType)->get()->toArray();
        return $memberInfo;
    }
}
