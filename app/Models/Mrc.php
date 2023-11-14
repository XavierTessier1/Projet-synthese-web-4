<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mrc extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'nom',
        'description'
    ];

    public function entreprises()
    {
        return $this->hasMany(Entreprise::class, 'mrc_id');
    }

    public function entreprisesList()
    {
        return $this->hasMany(Entreprise::class)->select('entreprises.id', 'entreprises.nom')->orderBy('nom');
    }

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

