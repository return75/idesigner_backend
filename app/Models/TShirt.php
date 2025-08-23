<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
