<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('album_songs')->insert([
            'album_id' => '1',
            'song_id' => '1',
        ]);
        DB::table('album_songs')->insert([
            'album_id' => '2',
            'song_id' => '2',
        ]);
        DB::table('album_songs')->insert([
            'album_id' => '3',
            'song_id' => '3',
        ]);
        DB::table('album_songs')->insert([
            'album_id' => '4',
            'song_id' => '4',
        ]);
    }
}
