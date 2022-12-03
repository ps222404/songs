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
            'name' => 'water',
            'genre' => 'rap',
            'founded' => '2003',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('bands')->insert([
            'name' => 'aap',
            'genre' => 'rap',
            'founded' => '2003',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
        DB::table('bands')->insert([
            'name' => 'aarde',
            'genre' => 'rap',
            'founded' => '2003',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()

        ]);
    }
}
