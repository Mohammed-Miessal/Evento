<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'image_path', 'date', 'description', 'location', 'price', 'status', 'categorie_id', 'organisateur_id', 'capacity' , 'available_places'];


    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function organisateur()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
