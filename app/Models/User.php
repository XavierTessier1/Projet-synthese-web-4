<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function entrepriseFavorites()
    {
        return $this->morphedByMany(Entreprise::class, 'favorable', 'favoris');
    }

    public function emplacementFavoris()
    {
        return $this->morphedByMany(Emplacement::class, 'favorable', 'favoris');
    }

    public function evenementFavoris()
    {
        return $this->morphedByMany(Evenement::class, 'favorable', 'favoris');
    }

    public function mrcFavorites()
    {
        return $this->morphedByMany(Mrc::class, 'favorable', 'favoris');
    }

    public function hebergementFavoris()
    {
        return $this->morphedByMany(Hebergement::class, 'favorable', 'favoris');
    }

    public function forfaitFavoris()
    {
        return $this->morphedByMany(Forfait::class, 'favorable', 'favoris');
    }
}
