<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','name','description','final_date', 'hex'
    ];

    public function tasks()
    {
		return $this->hasMany('App\Models\Task');	
    }
}
