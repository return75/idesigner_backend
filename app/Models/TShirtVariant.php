<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TShirtVariant extends Model
{
    protected $table = 'tshirt_variants';

    use HasFactory;

    protected $fillable = ['tshirt_id', 'color_id', 'material_id', 'size_id', 'image'];

    public function tshirt()
    {
        return $this->belongsTo(Tshirt::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
