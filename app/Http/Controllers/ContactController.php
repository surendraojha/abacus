<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

use Session;

class ContactController extends Controller{
   
   public function frontUser(){

   	return view('frontend.contact-us');

   }

   public function postFront(Request $request){

   	$rules =[
   		'contact_reason'=>'required',
   		'email'=>'required|email',
   		'first_name'=>'required',
   		'last_name'=>'required',
   		'phone'=>'required|numeric|min:9',
   		'phone_type'=>'required',
         'g-recaptcha-response' => 'required|captcha'
   	];

   	$request->validate($rules);

   	$contact = new Contact;

   	$contact->contact_reason = $request->contact_reason;

   	$contact->email = $request->email;

   	$contact->first_name = $request->first_name;

   	$contact->last_name = $request->last_name;

   	$contact->phone = $request->phone;

   	$contact->phone_type = $request->phone_type;

   	$contact->save();


   	session(['contact_person' =>$contact->id]);

      Session::flash('message', 'Thank you for providing us contact details!.Check your email for more details'); 

      Session::flash('alert-class', 'alert-success'); 

   	return redirect('send-email');


   }


   public function sendEmail(){

	   $admin = 'test@bsaitechnosales.com';

	    \Mail::to($admin)->send(new \App\Mail\MyTestMail());

	    $client = Contact::find(\Session::get('contact_person'));

	    \Mail::to($client)->send(new \App\Mail\MyClientEmail());

        Session::flash('message', 'Thank you for providing us contact details!.Check your email for more details'); 

        Session::flash('alert-class', 'alert-success'); 
        
       return redirect('contact-us');
   }



   /*....................................................................................
   									for backend part
   ......................................................................................*/
   public function generalQuestionList(){

	   	$contact = Contact::where(['contact_reason'=>'General question'])->get();

	   	return view('admin.general-question',compact('contact'));

   }



   public function quoteRequestList(){

   		$contact = Contact::where(['contact_reason'=>'quote'])->get();

	   	return view('admin.quote',compact('contact'));
   }



   public function referenceList(){

   		$contact = Contact::where(['contact_reason'=>'Refer someone'])->get();
	   	return view('admin.refer-list',compact('contact'));
   }


   public function deleteContact(Request $request){

     /* echo 'deleted';

      die;*/

   		$rules =[
   			'check' => 'required'
   		];

   		$request->validate($rules);


   		foreach ($request->check as $value) {

   			$contact = Contact::find($value);

            $reason = $contact->contact_reason;

   			$contact->delete();

   			
   		}

          Session::flash('message', 'Contact deleted successfully!!'); 

        Session::flash('alert-class', 'alert-success'); 

      if ($reason=='quote') {

         return redirect('admin/quote-request');
        
      }elseif ($reason=='General question') {

         return redirect('admin/general-questions');

      }else{

         return redirect('admin/refer-contact');

      }
   }
}
