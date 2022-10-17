<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    // table name
    protected $table = 'projects';
    // primarykey index
    protected $primaryKey = 'id';
    // core data
    protected $fillable = ['project_name','status_id'];
    //hiden objects
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;
}
