<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subscriber;

use Session;

use File;

class SubscriberController extends Controller{


	public function store(Request $request){

		$rules = [
			'email' => 'required|email','unique:subscribers,email',
		];

		$request->validate($rules);

		$subscriber = new Subscriber;

		$subscriber->email = trim($request->email);

		if ($subscriber->save()) {

			Session::flash('message', 'Thank you for Subscribing us'); 

        	Session::flash('alert-class', 'alert-success'); 
		}else{

			Session::flash('message', 'Can not subscribe right now!!'); 

      Session::flash('alert-class', 'alert-success'); 
		}


  		

		return redirect('/');
	}


    
    public function index(){

    	$subscriber = Subscriber::all();

    	return view('admin.subscriber-list',compact('subscriber'));
    }




    public function optionSubscriber(Request $request){

    		$rules =[
   				'check' => 'required'
   			];

   		$request->validate($rules);

   		switch($request->submit) {

   			case 'send': 

   					return view('admin.send-email-to-subscriber',['check'=>$request->check]);

   				break;
   			case 'delete': 

   					foreach ($request->check as $value) {

			   			$subscriber =Subscriber::find($value);

			   			$subscriber->delete();
   					}

   		}
      Session::flash('message', 'Selected subscriber deleted successfully!!'); 

      Session::flash('alert-class', 'alert-success'); 
      
   		return redirect('admin/subscriber-list');
    }



    public function sendEmailSubscriber(Request $request){


    	$rules =[
    		'title' => 'required|min:3',
    		'content' =>'required|min:10'
    	];

    	$request->validate($rules);

    	//session(['content']) = $request;

    	if ($request->hasFile('attachment')) {

    		$attachment = date('ymdhis').'.'.request()->attachment->getClientOriginalExtension();

        	$uploadedImage = $request->file('attachment');


        	$uploadedImage->move(public_path('public/uploads'), $attachment);



	    	foreach ( $request->check as $value) {

	    		$subscriber = Subscriber::find($value);

	    		$email = $subscriber->email;


        		\Mail::to($email)->send(new \App\Mail\MailSubscriber($request->title,$request->content,$attachment));
	    		
	    	}

	


        	$old_file=asset('public/public/uploads/'.$attachment);

            if (File::exists($old_file)) {

                File::delete($old_file);
            }

            Session::flash('message', 'Your mail is sent to selected subscribers!!'); 

        	Session::flash('alert-class', 'alert-success'); 

        	return redirect('admin/subscriber-list');

    	}else{

    		foreach ( $request->check as $value) {

	    		$subscriber = Subscriber::find($value);

	    		$email = $subscriber->email;


        		\Mail::to($email)->send(new \App\Mail\MailSubscriber($request->title,$request->content));
	    		
	    	}

	    	Session::flash('message', 'Your mail is sent to selected subscribers!!'); 

        	Session::flash('alert-class', 'alert-success'); 

        	return redirect('admin/subscriber-list');

    	}
    }
}
