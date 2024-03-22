<?php

namespace Database\Seeders;

use App\Models\produk;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'siswa',
            'password' => Hash::make("siswa"),
            'email' => 'siswa@siswa.com',
            
        ]);


         produk::create([
            'name' => 'Bakso',
            'price' => 10000,
            'stock' => 10,
            'kategori' => 'Makanan',
            
        ]);

          produk::create([
            'name' => 'Mie Ayam',
            'price' => 5000,
            'stock' => 10,
            'kategori' => 'Makanan',
            
        ]);


          produk::create([
            'name' => 'Sate',
            'price' => 8000,
            'stock' => 20,
            'kategori' => 'Makanan',
            
        ]);


        produk::create([
            'name' => 'Ayam',
            'price' => 12000,
            'stock' => 20,
            'kategori' => 'Makanan',
            
        ]);

        



    }
}
