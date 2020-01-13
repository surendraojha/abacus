<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\PaymentBank;

use \App\PaymentCash;

use File;

use Session;

use Storage;

use URL;

class PaymentController extends Controller{
    
    //frontend part
	public function paymentBankCustomer(){

		return view('frontend.payment-bank');
	}

	public function paymentCashCustomer(){

		return view('frontend.payment-cash');

	}


	public function postBank(Request $request){

		$rules = [
			'name_of_insured' => 'required',
			'address_of_insured' => 'required',
			'amt_of_transaction' => 'required|numeric|digits_between:2,50',
			'bank_ac_no' => 'required|numeric|digits_between:15,26',
			'routing_no' => 'required|numeric',
			'email' =>'required',
			'signature'=>'required|min:3',
			'g-recaptcha-response' => 'required|captcha'

		];


		$request->validate($rules);

		$payment = new PaymentBank;

		$payment->name_of_insured = $request->name_of_insured;

		$payment->address_of_insured = $request->address_of_insured;

		$payment->amt_of_transaction = $request->amt_of_transaction;

		$payment->bank_ac_no = $request->bank_ac_no;

		$payment->routing_no = $request->routing_no;

		$payment->email = $request->email;

		$payment->signature	=	$request->signature;

		$payment->submitted_date = date('Y-m-d');

		$payment->save();


		return redirect('exported-to-bank-pdf/'.$payment->id);

	}

	public function postCash(Request $request){
		
		$rules = [
			'name_of_insured' => 'required',
			'address_of_insured' => 'required',
			'amt_of_transaction' => 'required|numeric|digits_between:2,50',
			'credit_card_no' => 'required|numeric|digits_between:13,19',
			'expiration_date' => 'required',
			'csv' => 'required' ,
			'billing_address_zip_code' => 'required|digits:5',
			'email' => 'required',
			'signature'=>'required|min:3',
			'g-recaptcha-response' => 'required|captcha'
		];
		
		$request->validate($rules);

		$payment = new PaymentCash;

		$payment->name_of_insured	=	$request->name_of_insured;

		$payment->address_of_insured	=$request->address_of_insured;

		$payment->amt_of_transaction	=	$request->amt_of_transaction;

		$payment->credit_card_no	=	$request->credit_card_no;

		$payment->expiration_date	=	$request->expiration_date;

		$payment->signature	=	$request->signature;


		$payment->csv	=	$request->csv;

		$payment->billing_address_zip_code	=	$request->billing_address_zip_code;
		
		$payment->email = $request->email;

		
		$payment->submitted_date	=	date('Y-m-d');

		$payment->save();

		return redirect('exported-to-cash-pdf/'.$payment->id);

	}

    //admin part

    public function paymentBank(){

    	$payment = PaymentBank::all()->sortByDesc('submitted_date');

    	return view('admin/payment-bank',compact('payment'));
    }

    public function paymentCash(){
    	
    	$payment = PaymentCash::all();

    	return view('admin/payment-cash',compact('payment'));

    }


    public function deletePayCash(Request $request){

    	$rules =[
   			'check' => 'required'
   		];

   		$request->validate($rules);


   		foreach ($request->check as $value) {

   			$payment = PaymentCash::find($value);

   			//unlink the pdf file
   			/*echo asset($payment->attachment);

   			die;*/
   			if ($payment->attachment!=null) {
   				
   				Storage::delete(URL::to('/').'/'.$payment->attachment);
   			}

   			$payment->delete();

   			
   		}

   		 Session::flash('message', 'Payment cash record deleted successfully!!'); 

        Session::flash('alert-class', 'alert-success'); 
   		return redirect('admin/payment-cash');
    }



    public function deletePayBank(Request $request){

    	$rules =[
   			'check' => 'required'
   		];

   		$request->validate($rules);


   		foreach ($request->check as $value) {

   			$payment = PaymentBank::find($value);

   			if ($payment->attachment!=null) {
   				
   				Storage::delete(URL::to('/').'/'.$payment->attachment);
   			}

   			$payment->delete();

   			
   		}

   		Session::flash('message', 'Payment bank record deleted successfully!!'); 

        Session::flash('alert-class', 'alert-success'); 

   		return redirect('admin/payment-bank');

    }
}
