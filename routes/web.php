<?php

use App\Http\Controllers\SongController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;



Route::get('/songs', [SongController::class, 'index'])->Name('songs.index');
Route::get('/songs/create', [SongController::class, 'create'])->Name('songs.create');
Route::get('/songs/{id}', [SongController::class, 'show'])->Name('songs.show');
Route::post('/songs', [SongController::class, 'store'])->Name('songs.store');
Route::get('/songs/{id}/edit', [SongController::class, 'edit'])->Name('songs.edit');
Route::put('/songs/{id}', [SongController::class, 'update'])->Name('songs.update');
Route::delete('/songs/{id}', [SongController::class,'destroy'])->Name('songs.destroy');
Route::patch('/songs/{id}/albums', [SongController::class, 'storealbum'])->name('songs.storealbum');

/*** bands ***/
Route::resource('bands', BandController::class);
Route::get('/bands', [BandController::class, 'index'])->name('bands.index');
Route::post('/bands', [BandController::class, 'store'])->name('bands.store');
Route::get('/bands/create', [BandController::class, 'create'])->name('bands.create');
Route::get('/bands/{band}', [BandController::class, 'show'])->name('bands.show');
Route::put('/bands/{band}', [BandController::class, 'update'])->name('bands.update');
Route::get('/bands/{band}/edit', [BandController::class, 'edit'])->name('bands.edit');
Route::delete('/bands/{band}', [BandController::class, 'destroy'])->name('bands.destroy');


/*** albums ***/
Route::resource('albums', AlbumController::class);
Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');
Route::get('/albums/create', [AlbumController::class, 'create'])->name('albums.create');
Route::get('/albums/{album}', [AlbumController::class, 'show'])->name('albums.show');
Route::put('/albums/{album}', [AlbumController::class, 'update'])->name('albums.update');
Route::get('/albums/{album}/edit', [AlbumController::class, 'edit'])->name('albums.edit');
Route::delete('/albums/{album}', [AlbumController::class, 'destroy'])->name('albums.destroy');
Route::patch('/albums/{song_id}/songs', [AlbumController::class, 'storesongs'])->name('albums.storesongs');

