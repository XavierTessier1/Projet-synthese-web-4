<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hebergement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description'
    ];

    public function fans()
    {
        return $this->morphToMany(User::class, 'favorable', 'favoris');
    }

    public function getEstAimerAttribute()
    {
        $user = User::find(1);
        return $this->fans()->where('user_id', $user->id)->count() > 0;
    }
}
