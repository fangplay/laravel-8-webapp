<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary extends Model{
    use HasFactory;
    //table name
    protected $table = 'diary';
    // id data
    protected $primaryKey = 'id';
    // name data
    protected $fillable = ['date','story'];
    //hiden objects
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;
}
