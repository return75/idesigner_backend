<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserEditor extends Model
{
    protected $table = 'user_editor';

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
