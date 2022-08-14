<?php

namespace App\Http\Controllers;

use App\pesanan;
use App\pesanan_detail;
use \PDF;
use Illuminate\Http\Request;


class pdfController extends Controller
{
    public function getPDF(Request $r)
    {
        $id = pesanan::where('id_pesanan', $r->id)->first();
        $data1 = pesanan::join('pesanan_detail', 'pesanan.id_pesanan', '=', 'pesanan_detail.pesanan_id')
        ->where('pesanan_detail.pesanan_id', $id)
        ->get();
        //$data1['pesanan_details'] = pesanan_detail::where('pesanan_id', $data['pesanans']->id_pesanan)->get();
      

        $pdf=PDF::loadView('print.pdf',['data1'=>$data1,]);
        return $pdf->stream('bukti.pdf');

    }
}
