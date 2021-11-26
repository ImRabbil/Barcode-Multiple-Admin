<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Picqer;
use App\Contracts;


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
        return view('home');
    }


    public function AllContracts(){

       
        //  $va = DB::table('contracts')->get();
        // return view('allcontracts')->with('data',$va);
         $contracts=Contracts::all();
    
    return view('barcode',compact('contracts')) ;
    }
    // public function InsertData(){
    //     return view('insert');
    //  }
    //  public function DataAdded(Request $request){
    //     $data = array();
    //     $data['name']=$request->name;
    //     $data['barcode']=$request->barcode;
    //     $data['bookcode']=$request->bookcode;
    //     $data['email']=$request->email;
    //     $data['phone']=$request->phone;
    //     $data['description']=$request->description;

    //      $db = DB::table('contracts')->insert($data);

    //      return redirect()->route('all.contracts');


    //  }

     public function Barcode()
     {
    //     $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    // $barcode = $generator->getBarcode('081231723897', $generator::TYPE_CODE_128);
        $contracts=Contracts::all();
    
    return view('barcode',compact('contracts')) ;

     }

     public function Store(Request $request){
        $bookcode=$request->bookcode;

        $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    $barcode = $generator->getBarcode($bookcode, $generator::TYPE_CODE_128);

    $data =new Contracts;
    $data->name=$request->name;
    $data->barcode=$barcode;
    $data->bookcode=$request->bookcode;
    $data->email=$request->email;
    $data->phone=$request->phone;
    $data->description=$request->description;
    $data->save();
    return redirect()->back();



     }
}
