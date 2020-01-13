<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quote;

use Session;
class QuoteController extends Controller{
    

    //frontend part

    public function form(){

    	return view('frontend.quote');
    }


    public function postForm(Request $request){

    	  $rules =[
  	   		'quote'=>'required',
  	   		'email'=>'required|email',
  	   		'contact_name'=>'required|min:3',
  	   		'phone'=>'required|numeric|min:9',
          'g-recaptcha-response' => 'required|captcha'

   			];

   			$request->validate($rules);

   			$quote = new Quote;

   			$quote->quote = $request->quote;

   			$quote->email = $request->email;

  			$quote->contact_name = $request->contact_name;

  			$quote->phone = $request->phone;

  			$quote->save();

        Session::flash('message', 'Thank you for providing us quote details!.'); 
        
        Session::flash('alert-class', 'alert-success'); 

        return redirect('quote-request');


    }


    //admin part

    public function homeQuote(){

    	$quote = Quote::where(['quote'=>'home quote'])->get();

    	return view('admin.home-quote',compact('quote'));

    }


    public function autoQuote(){
    	
    	$quote = Quote::where(['quote'=>'auto quote'])->get();


    	return view('admin.auto-quote',compact('quote'));
    }


    public function businessQuote(){

    	$quote = Quote::where(['quote'=>'business quote'])->get();

    	return view('admin.business-quote',compact('quote'));
    	
    }


    public function deleteQuote(Request $request){


   		$rules =[
   			'check' => 'required'
   		];

   		$request->validate($rules);


   		foreach ($request->check as $value) {

   			$quote = Quote::find($value);

            $type = $quote->quote;

   			$quote->delete();

   			
   		}

      Session::flash('message', 'Quote deleted successfully!!'); 

      Session::flash('alert-class', 'alert-success'); 


      if ($type=='home quote') {

         return redirect('admin/home-quote');
        
      }elseif ($type=='auto quote') {

         return redirect('admin/auto-quote');

      }else{

         return redirect('admin/business-quote');

      }
   }
}
