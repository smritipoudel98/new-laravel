<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $table='tasks';
    protected $fillable = ['description','completed'];
}