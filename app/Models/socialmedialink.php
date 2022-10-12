<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socialmedialink extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filters)
    {
            $query->when($filters['user'] ?? false);
    }


    public $table = "socialmedialinks";

    protected $fillable = ['socialmedialink', 'user_id' , 'views'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
