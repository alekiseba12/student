<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Picqer;
use PDF;


class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    $bookings=DB::table('bookings')->select('*')->get();
        return view('home', compact('bookings'));
    }
    public function viewclient($id){
        $label='081231723897';
        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        $barcode=$generator->getBarcode($label, $generator::TYPE_CODE_128);
        $clients=DB::table('bookings')->select('*')->where('id', '=', $id)->get()->toArray();
        return view('invoice', compact('barcode', 'label', 'clients'));
        

    }
    public function pdf($id){
        $label='081231723897';
        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        $barcode=$generator->getBarcode($label, $generator::TYPE_CODE_128);
        $clients=DB::table('bookings')->select('*')->where('id', '=', $id)->get();
        $pdf=PDF::loadView('invoice',compact('barcode', 'label', 'clients'));
        return $pdf->download('report.pdf');

    }
}
