<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user"; // table name

    
    public $timestamps = false;
    // 新增資料時laravel預設會insert into這兩個欄位: updated_at, created_at
    // 如果沒有這些欄位就會有exception
    // 因此設為false
    
}