<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    //table name
    protected $table='posts';
    //primary key
    public $primarykeys='id';
    //timestamps
    public $timestamps=true;
}
