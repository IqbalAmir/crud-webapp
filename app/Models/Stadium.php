<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    use HasFactory;


    //table name
    protected $table ='stadium';
    //primary
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;

}
