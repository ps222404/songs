<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'name' => Str::random(10),
            'year' => '2003',
            'times_sold' => '2003',
        ]);
        DB::table('albums')->insert([
            'name' => Str::random(10),
            'year' => '2003',
            'times_sold' => '20043',
        ]);
        DB::table('albums')->insert([
            'name' => Str::random(10),
            'year' => '2003',
            'times_sold' => '20034',
        ]);
        DB::table('albums')->insert([
            'name' => Str::random(10),
            'year' => '2000',
            'times_sold' => '20034',
        ]);
        DB::table('albums')->insert([
            'name' => Str::random(10),
            'year' => '2003',
            'times_sold' => '20034',
        ]);
    }
}
