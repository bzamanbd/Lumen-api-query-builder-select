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
   ///==single row/column from table==///
   // $result = DB::table('details')->where('id','3')->first();
   // return $result->roll;

   ///==retrieve a single row by id==//
   // $result = DB::table('details')->find(6);
   // return $result->roll;

   ///==retrieve a single column by pluck ==//
   // $result = DB::table('details')->pluck('city');
   // return $result;

   ///==retrieve multiple columns by pluck ==//
   $result = DB::table('details')->pluck('name','class');
   return $result;




  }

}