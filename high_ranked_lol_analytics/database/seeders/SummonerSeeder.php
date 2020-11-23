<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SummonerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('summoners')->insert([
            'summoner_id' => Str::random(10),
            'summoner_account_id' => Str::random(10),
            'summoner_name' => Str::random(10),
        ]);

        /*
            $table->string('summoner_id');
            $table->string('summoner_account_id');
            $table->string('summoner_name');
        */
    }
}
