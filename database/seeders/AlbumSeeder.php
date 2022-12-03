<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'name' => 'sap',
            'year' => '2003',
            'times_sold' => '2003',
            'band_id' => '1',
        ]);
        DB::table('albums')->insert([
            'name' => 'trap',
            'year' => '2003',
            'times_sold' => '20043',
            'band_id' => '2',
        ]);
        DB::table('albums')->insert([
            'name' => 'trick',
            'year' => '2003',
            'times_sold' => '20034',
            'band_id' => '3',
        ]);
        DB::table('albums')->insert([
            'name' => 'lop',
            'year' => '2000',
            'times_sold' => '20034',
            'band_id' => '1',
        ]);

    }
}
