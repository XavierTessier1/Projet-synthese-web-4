<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEntreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function entreprise()
    {
        return $this->belongsToMany(Entreprise::class, 'entreprise_type', 'type_id', 'entreprise_id');
    }
}
