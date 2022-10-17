<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gamelist extends Model
{
    use HasFactory;
    //table name
    protected $table = 'game-list';
    // id data
    protected $primaryKey = 'id';
    // name data
    protected $fillable = ['name','gen_id'];
    //hiden objects
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;
}
