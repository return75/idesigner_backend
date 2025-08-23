<?php

namespace App\Models;

class UserEditor extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'tshirt_variant_id', 'editor_data'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tshirtVariant()
    {
        return $this->belongsTo(TshirtVariant::class);
    }
}
