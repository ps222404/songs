<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'title' => 'water',
            'singer' => 'ak',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('songs')->insert([
            'title' => 'aarde',
            'singer' => 'ak',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);

        DB::table('songs')->insert([
            'title' => 'vuur',
            'singer' => 'ak',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('songs')->insert([
            'title' => 'lucht',
            'singer' => 'ak',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('songs')->insert([
            'title' => 'elem',
            'singer' => 'ak',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('songs')->insert([
            'title' => 'ent',
            'singer' => 'ak',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('songs')->insert([
            'title' => 'en',
            'singer' => 'ak',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('songs')->insert([
            'title' => 'vrede',
            'singer' => 'ak',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);


    }

}
