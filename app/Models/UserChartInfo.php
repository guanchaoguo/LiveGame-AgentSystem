<?php

namespace App\Models;

/**
游戏报表,包含用户输赢 模型
*/
use Illuminate\Auth\Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class UserChartInfo extends Eloquent
{
    use  Authenticatable;
    protected $table = 'user_chart_info';
    protected $connection = 'mongodb';
    protected $hidden = ['_id'];
//    protected $hidden = ['_id'];
    public $timestamps = false; //关闭创建时间、更新时间

}
