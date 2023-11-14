<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'adresse',
        'telephone',
        'email',
        'siteWeb',
        'mrc_id',
        'typeEntreprise_id',
        'typeCommodite_id',
        'user_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function fans()
    {
        return $this->morphToMany(User::class, 'favorable', 'favoris');
    }

    public function mrc()
    {
        return $this->belongsTo(Mrc::class);
    }

    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    public function types()
    {
        return $this->belongsToMany(TypeEntreprise::class, 'entreprise_type', 'entreprise_id', 'type_id');
    }

    public function typesList()
    {
        return $this->hasMany(TypeEntreprise::class)->select('type_entreprises.id', 'type_entreprises.nom')->orderBy('nom');
    }

    public function commodites()
    {
        return $this->belongsToMany(TypeCommodite::class, 'commodite_entreprise', 'entreprise_id', 'commodite_id');
    }

    public function commoditesList()
    {
        return $this->hasMany(TypeCommodite::class)->select('type_commodites.id', 'type_commodites.nom')->orderBy('nom');
    }

    public function getEstAimerAttribute()
    {
        $user = User::find(1);
        return $this->fans()->where('user_id', $user->id)->count() > 0;
    }
}
