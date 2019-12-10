<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth');
   }

   
   public function up()
   {	
   	return view('sign.up');
   }

   public function in()
   { 	
   	return view('sign.in');
   }

   public function table()
   {	
   	return view('sign.table');
   }

   public function button()
   {  
      return view('sign.button');
   }

   public function element()
   {  
      return view('sign.element');
   }

   public function tabs()
   {  
      return view('sign.tabs');
   }

   public function logo()
   {  
      return view('sign.logo');
   }

   public function chart()
   {  
      return view('sign.chart');
   }

   public function maps()
   {  
      return view('sign.maps');
   }

}
