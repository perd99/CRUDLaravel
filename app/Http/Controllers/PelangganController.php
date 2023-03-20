<?php

namespace App\Http\Controllers;

use App\Exports\PelangganExport;
use App\Imports\PelangganImport;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

// use PDF;

class PelangganController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Pelanggan::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Pelanggan::paginate(5);
        }


        return view('pelanggan.datapelanggan', compact('data'));
    }

    public function tambahpelanggan()
    {
        return view('pelanggan.tambahpelanggan');
    }

    public function insertpelanggan(Request $request)
    {
        // dd($request->all());
        Pelanggan::create($request->all());
        return redirect()->route('pelanggan')->with('sukses', 'Data Berhasil Di Tambahkan');
    }

    public function tampilpelanggan($id)
    {
        $data = Pelanggan::find($id);
        // dd($data);
        return view('pelanggan.tampilpelanggan', compact('data'));
    }

    public function updatepelanggan(Request $request, $id)
    {
        $data = Pelanggan::find($id);
        $data->update($request->all());
        return redirect()->route('pelanggan')->with('sukses', 'Data Berhasil Di Update');
    }

    public function deletepelanggan($id)
    {
        $data = Pelanggan::find($id);
        $data->delete();
        return redirect()->route('pelanggan')->with('sukses', 'Data Berhasil Di Hapus');
    }

    public function exportpdf()
    {
        $data = Pelanggan::get();
        return view('pelanggan.datapelanggan-pdf', compact('data'));

        // view()->share('data', $data);
        // $pdf = PDF::loadview('pelanggan/datapelanggan-pdf');
        // return $pdf->stream();
    }

    public function exportexcel()
    {
        return Excel::download(new PelangganExport, 'datapelanggan.xlsx');
    }

    // public function importexcel(Request $request)
    // {
    //     $data = $request->file('file');
    //     $namafile = $data->getClientOriginalName();
    //     $data->move('PelangganData', $namafile);
    //     Excel::import(new PelangganImport, \public_path('/PelangganData/' . $namafile));
    //     return \redirect()->back();
    // }
}
