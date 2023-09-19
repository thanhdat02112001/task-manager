<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id', 'due_date', 'remind', 'repeat', 'status', 'important', 'note'];

    /**
     * Belong to relationship
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * One todo has many steps
     */
    public function steps()
    {
        return $this->hasMany(Step::class);
    }
}
