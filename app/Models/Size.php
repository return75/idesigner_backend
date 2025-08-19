<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Size extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name_en', 'name_fa'];

    public function variants()
    {
        return $this->hasMany(TShirtVariant::class);
    }
}
