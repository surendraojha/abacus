<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\OurTeam;

use File;

use Session;

class OurTeamController extends Controller{
   
   //$ourTeam =

   //for frontend 
   public function index(){

	/*
	   		Model::skip(3)->take(3)->get()；
	*/   

		$our_team = OurTeam::all();

		return view('frontend.our-team',compact('our_team'));

   }



   /*
   	for backend
   */

   public function  view(){

   		$our_team = OurTeam::all();

		return view('admin.our-team',compact('our_team'));
   }


   public function create(){

   		return view('admin.create-our-team');
   }


   public function store(Request $request){

   		$rules =[

   			'full_name'=>'required|min:3',
   			'email'=>'required|email',
   			'designation' =>'required|min:3',
   			'photo'=>'mimes:jpg,jpeg,png,gif'
   		];

   		$request->validate($rules);

   		$our_team = new OurTeam;

   		if ($request->hasFile('photo')) {
   			
   			$imageName = date('ymdhis').'.'.request()->photo->getClientOriginalExtension();

        	$uploadedImage = $request->file('photo');

        	$our_team->photo =	$imageName;

        	$uploadedImage->move(public_path('uploads'), $imageName);

   		}

		$our_team->full_name = $request->full_name;

		$our_team->email = $request->email;

		$our_team->designation =	$request->designation;

		$our_team->facebook =	$request->facebook;

		$our_team->twitter =	$request->twitter;

		$our_team->in =	$request->in;

		$our_team->save();

		Session::flash('message', 'Team Member added Successfully!!'); 

        Session::flash('alert-class', 'alert-success'); 

		return redirect('admin/our-team');
   }



   public function edit($id){

   		$team_member = OurTeam::find($id);

   		return view('admin.edit-our-team',compact('team_member'));

   }

   

   public function update(Request $request){

   }

   public function delete(Request $request){

   }
}
