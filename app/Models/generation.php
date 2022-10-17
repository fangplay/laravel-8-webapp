<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generation extends Model
{
    use HasFactory;
    //table name
    protected $table = 'generation';
    // id data
    protected $primaryKey = 'id';
    // name data
    protected $fillable = ['name'];
    //hiden objects
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;
}
