<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'ville',
        'emplacement_id',
        'description',
        'prix',
        'date_debut',
        'date_fin'
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
