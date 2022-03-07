<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = "cards";

    protected $fillable = ['user_id', 'program', 'name', 'email', 'phone', 'born_again', 'age', 'source', 'address', 'member', 'visitation', 'comment', 'is_visited', 'source_other', 'gender'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
