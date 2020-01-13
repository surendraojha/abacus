<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\OurService;

class OurServiceController extends Controller{

    //admin part
    public function index(){

    	$our_service = OurService::find(1);

    	return view('admin.our-service',compact('our_service'));
    }

    public function edit(){

    	$our_service = OurService::find(1);

    	return view('admin.edit-our-service',compact('our_service'));
    }

    public function update(Request $request){

    	
    	$rules = [
    		'about_us' =>'required|min:50'
    	];

    	$request->validate($rules);

    	$our_service = OurService::find(1);

    	$our_service->about_us = $request->about_us;

    	$our_service->save();

         Session::flash('message', 'Our service updated successfully!!'); 

        Session::flash('alert-class', 'alert-success'); 

    	return redirect('admin/edit-our-services');
    }
}
