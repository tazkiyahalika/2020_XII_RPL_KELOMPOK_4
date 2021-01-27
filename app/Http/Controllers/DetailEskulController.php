<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailEskulController extends Controller
{
    // save untuk table  pertama
        $risma  = new Eskul();
        $risma->nama_eskul = $request->input('nama_eskul');
        $risma->save();

        //save untuk table ke-2
        $detail = new DetailEskul();
        $detail->id_eskul = $risma->id;
        $detail->nama_pembina = $request->input('nama_pembina');
        $detail->deskripsi = $request->input('deskripsi');
        $detail->waktu_eskul = $request->input('waktu_eskul') ;
        $detail->save();
}
