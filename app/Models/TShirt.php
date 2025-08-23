<?php

namespace App\Models;
use App\Models\Material;
use App\Models\TShirtVariant;

class Tshirt extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image'];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function variants()
    {
        return $this->hasMany(TShirtVariant::class);
    }
}
