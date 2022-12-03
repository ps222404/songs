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
            'title' => Str::random(10),
            'singer' => Str::random(10),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('songs')->insert([
            'title' => Str::random(10),
            'singer' => Str::random(10),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('songs')->insert([
            'title' => Str::random(10),
            'singer' => Str::random(10),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('songs')->insert([
            'title' => Str::random(10),
            'singer' => Str::random(10),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
    }

}
