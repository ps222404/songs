<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class bandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'founded' => '2003',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('bands')->insert([
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'founded' => '2004',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('bands')->insert([
            'name' => Str::random(10),
            'genre' => Str::random(10),
            'founded' => '2006',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
    }
}
