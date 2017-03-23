<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Closet;

class orderController extends Controller
{
    public function showItems(Request $request){
    	return view ('home' , compact('closets'));
    }

    public function showOrder(Request $request){
    	$id = $request->id;
    	$name = $request->name;
    	$address = $request->address;
    	$contact = $request->contact;
    	$item = $request->item;
    	$price = $request ->price;

    	$closet = new Closet;
        $closet->id = $id;
    	$closet->name = $name;
        $closet->address = $address;
        $closet->contact = $contact;
    	$closet->item = $item;
    	$closet->price = $price;
    	$closet->save();

    	return view ('complete-order',[
    		'id' => $id,
    		'name' => $name,
    		'address' => $address,
    		'contact' => $contact,	
    		'item' => $item,
    		'price' => $price
    	]);
    }
    public function show(){
    	 $closet = closet::orderBy('id')->get();

        return view('your-orders' , [
            'students' =>  $students,
            ]);
    }

     public function showUpdate(Request $request){

         return view('update', [
             'id' => $request -> id,
             'name' => $request -> name,
             'address' => $request -> address,
             'contact' => $request -> contact,
             'item' => $request -> item,
             'price' => $request -> price]);
     }
    
     public function edit(Request $request,$id){
        $closets = closet::find($id);
        $closets-> name = $request->name;
        $closets-> address= $request->address;
        $closets->contact = $request->contact;
        $closets->item = $request->item;
        $closets->price = $request->price;
        $closets->save();
        return redirect('/your-order'); 
     }

     public function deleteOrder(Request $request,$id){
         $closet = closet::find($id)->delete();
         return redirect('/your-order');
     }

     public function addOrder(Request $request){
        return view ('order-form');
     }

     public function showList(){
        $closets = closet::orderBy('id')->get();

         return view('your-orders' , [
            'closets' => $closets,
            ]);
     }

}

