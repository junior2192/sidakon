<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Paket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bangunan;

class LaporanController extends Controller
{
    public function index()
    {
        $pakets = Paket::with('bangunans')->get();
        // dd($pakets);
        return view('laporan.index', compact('pakets'));

    }

    public function cetak(Request $request)
    {
       $paket = Paket::with('bangunans')->where('id','=', $request->filter_paket)->first();
       $bangunans = Bangunan::with('paket')->where('paket_id','=', $request->filter_paket)->get(); 
       $pdf = Pdf::loadView('laporan.cetak', compact('paket', 'bangunans'));
       $pdf->getDomPDF()->set_option("enable_php", true);
       return $pdf->stream($paket->name.".pdf");
    }
}
