<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCommodite extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie',
        'nom'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function entreprise()
    {
        return $this->belongsToMany(Entreprise::class, 'entreprise_commodite', 'commodite_id', 'entreprise_id');
    }
}
