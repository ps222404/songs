<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;
    protected $table = 'bands';
    protected $fillable = [
        'name',
        'genre',
        'founded',
        'active_till'
    ];
    protected $guarded = ['*', 'band'];

}