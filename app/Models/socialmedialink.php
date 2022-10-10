<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socialmedialink extends Model
{
    use HasFactory;

    public $table = "socialmedialinks";

    protected $fillable = ['socialmedialink','user_id'];

    public function socialmedialink()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
