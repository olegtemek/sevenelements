<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = ['color_id', 'description', 'name', 'pos', 'image1', 'image2', 'image3', 'image4'];

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id', 'id');
    }
}
