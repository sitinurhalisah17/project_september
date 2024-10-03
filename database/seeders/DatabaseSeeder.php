<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Level;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Level::create([
            'nama_level' => 'Admin'
        ]);

        Level::create([
            'nama_level' => 'User'
        ]);

        User::create([
            'name' => 'sitinur',
            'foto' => '',
            'email' => 'sitinur@gmail.com',
            'password' => bcrypt('12345'),
            'levels_id' => 1,
        ]);

        User::create([
            'name' => 'nurhalisah',
            'foto' => '',
            'email' => 'nurhalisah@gmail.com',
            'password' => bcrypt('12345'),
            'levels_id' => 2,

        ]);

        Kategori::create([
            'nama_kategori' => 'Terkini'
        ]);

        Kategori::create([
            'nama_kategori' => 'Terpopuler'
        ]);

        Kategori::create([
            'nama_kategori' => 'Top News'
        ]);

        Kategori::create([
            'nama_kategori' => 'Home'
        ]);

        Kategori::create([
            'nama_kategori' => 'Politik'
        ]);

        Kategori::create([
            'nama_kategori' => 'Hukum'
        ]);

        Kategori::create([
            'nama_kategori' => 'Ekonomi'
        ]);

        Berita::create([
            'judul' => 'Pencurian Sepedah',
            'isi_berita' => 'Telah Terjadi pencurian sepedah pada hari kamis dan dua sepedah dinyatakan hilang',
            'tanggal_publikasi' => '2024/07/23',
            'kategoris_id' => 1,
            'foto' => ''
        ]);

    }
}
