<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        
        DB::table('tabel_produk')->insert([
            'produk_nama' => "Grand Theft Auto Online",
            'produk_tipe' => "Open World",
            'produk_platform' => "Windows",
        ]);

        DB::table('tabel_produk')->insert([
            'produk_nama' => "Need For Speed The Run",
            'produk_tipe' => "Racing",
            'produk_platform' => "IOS",
        ]);

        DB::table('tabel_produk')->insert([
            'produk_nama' => "Pokemon Red & Blue",
            'produk_tipe' => "Horror",
            'produk_platform' => "GameBoy",
        ]);
    }
}
