<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $dates = ['due_date'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
