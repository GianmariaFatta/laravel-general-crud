<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'mana_cost', 'mana_type', 'thumb', 'type', 'edition', 'first_effect', 'second_effect', 'third_effect', 'fourth_effect', 'description', 'strength', 'constitution'];
}
