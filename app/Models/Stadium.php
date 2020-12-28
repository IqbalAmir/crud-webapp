<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    use HasFactory;


    //table name
    protected $table = 'stadium';
    //primary
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;


    protected $fillable = ['name', 'capacity', 'body', 'user_id','image'];


    public function path()
    {
        return route('stadium.id', $this);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
