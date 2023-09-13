<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'content', 'todo_id'];

    /**
     * One step belong to one Todo
     */
    public function todo()
    {
        return $this->belongsTo(Todo::class);
    }
}
