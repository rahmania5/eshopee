<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use Illuminate\Database\Seeder;

class TransaksiDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransaksiDetail::truncate();
        Transaksi::truncate();

        $barangs = Barang::where('id', '<=', '50')->get();

        foreach ($barangs as $barang){
            TransaksiDetail::factory(2)->create(['barang_id' => $barang->id]);
        }

        $transaksis = Transaksi::factory(15)->create();

        foreach ($transaksis as $transaksi){
            TransaksiDetail::factory(3)->create(['transaksi_id' => $transaksi->id]);
        }
    }
}
