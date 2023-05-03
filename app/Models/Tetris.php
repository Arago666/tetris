<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tetris extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_id',
        'x_coordinate',
        'y_coordinate',
        'value',
    ];
}
