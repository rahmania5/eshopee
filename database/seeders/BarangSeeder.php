<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::truncate();
        Kategori::truncate();

        $kategoris = Kategori::factory(10)->create();

        foreach ($kategoris as $kategori){
            Barang::factory(10)->create(['kategori_id' => $kategori->id]);
        }
    }
}
