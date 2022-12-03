<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [];
    protected $table = 'songs';
    protected $guarded = ['*', 'id'];
    public function album(){
        return $this->belongsTomany(Album::class);
    }
}
