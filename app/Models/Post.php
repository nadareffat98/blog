<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use sluggable;
    protected $fillable = ['Title','Description','user_id','slug'];
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'Title'
            ]
        ];
    }

}
