<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','name','description','due_date', 'area', 'state', 'note', 'proyect_id'
    ];

    public function proyect()
    {
        return $this->belongsTo(Proyect::class, 'proyect_id', 'id');
    }
}
