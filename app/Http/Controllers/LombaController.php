<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use App\Models\Persyaratan;
use Illuminate\Http\Request;

class LombaController extends Controller
{
    public function cinema()
    {
        $peserta = Tim::with('pembayaran')->whereHas('lomba', function ($query) {
            $query->where('kategori_lomba_id', 1);
        })->paginate(10);
        return view('server.admin.cinema', compact('peserta'));
    }

    public function iai()
    {
        $peserta = Tim::with('pembayaran')->whereHas('lomba', function ($query) {
            $query->where('kategori_lomba_id', 2);
        })->paginate(10);
        return view('server.admin.iai', compact('peserta'));
    }

    public function mdr()
    {
        $peserta = Tim::with('pembayaran')->whereHas('lomba', function ($query) {
            $query->where('kategori_lomba_id', 3);
        })->paginate(10);
        return view('server.admin.mdr', compact('peserta'));
    }

    public function persyaratan()
    {
        // $peserta = Tim::with('pembayaran')->whereHas('lomba', function ($query) {
        //     $query->where('kategori_lomba_id', 3);
        // })->paginate(10);
        $peserta = Persyaratan::join('lombas', 'lombas.id', '=', 'persyaratans.lomba_id')
            ->join('tims', 'lombas.tim_id', '=', 'tims.id')
            ->join('kategori_lombas', 'kategori_lombas.id', '=', 'lombas.kategori_lomba_id')
            ->select('tims.nama_tim', 'persyaratans.isi', 'kategori_lombas.nama')
            ->paginate(10);
        return view('server.admin.persyaratan', compact('peserta'));
    }
}
