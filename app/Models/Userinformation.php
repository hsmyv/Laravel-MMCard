<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinformation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
        protected $fillable = ['username','user_id', 'profilepicture','about','facebooklink', 'instagramlink', 'twitterlink'];
       

        public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function userinformation(){

        return $this->hasMany(Userinformation::class);
    }

}
