<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsController extends Controller{

  function showData(){
    $result =  DB::table('details')->get();
    return response($result);
  }

  function selectRow(){
   $result = DB::table('details')->where('id','3')->first();
   return $result->roll;
  }

}