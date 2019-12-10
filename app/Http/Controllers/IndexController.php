<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index.index');
    }


    public function cetak($masa)
    {   

        view()->share(compact());

        $pdf = PDF::loadView('index/cetak')->setPaper('a4','potrait');
        return $pdf->stream('index');
    }
// setPaper(array(0, 0, 844.55, 977.9),'potrait');

     public function cetakpdf(Request $request)
    {

    view()->share(compact('masa'));

    $pdf = PDF::loadView('index/cetak')->setPaper('a4','potrait');

    return $pdf->stream('index');

    }
}
