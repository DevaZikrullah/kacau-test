<?php

namespace App\Repositories;

use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiRepository
{
    public function addTransaksiMobil(Request $request): Transaksi
    {
        $data = $request->only([
           'nama',
           'id_item',
           'stok_item'
        ]);

        $transaksi = new Transaksi();
        $transaksi->nama = $data['nama'];
        $transaksi->id_item = $data['id_item'];
        $transaksi->stok_item = $data['stok_item'];
        //cek item id jika ada maka get data item tersebut lalu ambil stok dari item tersebut lalu decrement dengan $data['stok_item']
//        dd(Mobil::find($data['id_item'])->get(['stok']));
        if ($data['stok_item'] < 0)
        {
            throw new \Exception("if the desired stock is negative it will cause the stock in the database to be added to the desired stock");
        }

        $mobil = Mobil::find($data['id_item']);
        if ($mobil == null){
            throw new \Exception("this id is not in the database");
        }
        elseif ($mobil->stok < $data['stok_item'])
        {
            throw new \Exception("stok tidak mencukupi");
        }
        else {
            $mobil->decrement('stok', $data['stok_item']);
        }
        $transaksi->save();
        return $transaksi;
    }

    public function addTransaksiMotor(Request $request): Transaksi
    {
        $data = $request->only([
            'nama',
            'id_item',
            'stok_item'
        ]);

        $transaksi = new Transaksi();
        $transaksi->nama = $data['nama'];
        $transaksi->id_item = $data['id_item'];
        $transaksi->stok_item = $data['stok_item'];
        //cek item id jika ada maka get data item tersebut lalu ambil stok dari item tersebut lalu decrement dengan $data['stok_item']
//        dd(Mobil::find($data['id_item'])->get(['stok']));
        $motor = Motor::find($data['id_item']);
        if ($motor == null){
            throw new \Exception("this id is not in the database");
        }
        elseif ($motor->stok < $data['stok_item'])
        {
            throw new \Exception("stok tidak mencukupi");
        }
        else {
            $motor->decrement('stok', $data['stok_item']);
        }
        $transaksi->save();
        return $transaksi;
    }
    public function getHistory()
    {
        return Transaksi::all();
    }

    public function getLatestHistory()
    {
        return Transaksi::latest()->first();
    }
}
