<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['author'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function author()
    {
        // Kita pakai nama 'author' tapi relasinya ke model User
        return $this->belongsTo(User::class, 'user_id');
    }
}
