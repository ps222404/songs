<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'albums';
    protected $fillable = [];
    protected $guarded = ['*', 'album'];
    public function band(){
        return $this->belongsTo(Band::class);
    }
    public function songs(){
        return $this->belongsToMany(Song::class);
    }
}
