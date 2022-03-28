<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Boxletter;
use Illuminate\Support\Facades\DB;

class BoxletterController extends Controller
{
    public function index(){

        $boxletters = DB::table('boxLetter')->join('city', 'idCity','=','fkCity')->get();
        //$boxletters = Boxletter::select('street', 'fkCity')->get();

        return view('api.boxletter.getBoxLetter', [
            'boxletters' => $boxletters
        ]);
    }

    public function checkOutTowns($town){
        $arrayTowns = explode(',', $town);
        $boxletters = DB::table('boxLetter')->join('city', 'idCity','=','fkCity')->whereIn('city', $arrayTowns)->get();

        return view('api.boxletter.getBoxLetterTown', [
            'boxletters' => $boxletters
        ]);
    }

    public function checkOutId($id){
        $arrayid = explode(',', $id);
        $boxletters = DB::table('boxLetter')->join('city', 'idCity','=','fkCity')->whereIn('idBoxLetter', $arrayid)->get();

        return view('api.boxletter.getById.getById', [
            'boxletters' => $boxletters
        ]);
    }

    public function updateBoxLetter($data){
        $arrayData = explode(';', $data);
        BoxLetter::where('idBoxLetter', $arrayData[0])
        ->update(['typeOfBoxLetter' => $arrayData[1], 'street' => $arrayData[2], 'pickUpTime' => $arrayData[3], 'coordinates' => $arrayData[4], 'normalCoordinates' => $arrayData[5], 'fkCity' => $arrayData[6]]);
        
        return view('api.city.updateCity.getUpdateCity', [
            'status' => true
        ]);
    }
}
