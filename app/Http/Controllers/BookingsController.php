<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
	public function index(){
  		$bookings = DB::table('bookings')->get();

    	return view ('bookings.index', compact ('bookings'));
    }

   public function create(){
   	$bookings = DB::table('bookings')->insert(
   		['date_booked'=>'2020-01-20',
   		'booker' => 'Aaron',
   		'date_to_book' =>'2020-01-26',
   		'type' =>'Christmas Party',
   		'description' =>'SLU']);
   }

   public function update(){
   	$bookings =	DB::table('bookings')
   	->where('id', 10 )
   	->update(
   		['booker' => 'Roy'] );
   }

   public function delete(){
   	$bookings = DB::table ('bookings')
   	->where('id','10')
   	->delete();
   }

	public function filter(){
		$bookings = DB::table ('bookings')
		->where('type','meetings')
		->get();
		return view ('bookings.index', compact('bookings'));
	}


}
