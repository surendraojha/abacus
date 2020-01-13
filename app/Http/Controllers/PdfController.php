<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

use App\PaymentCash;

use App\PaymentBank;

use Session;

class PdfController extends Controller{
    //

    public function index(){

    	$data = PaymentCash::all();

    	return view('pdf',compact('data'));
    }

     public function exportBankPdf($id){


     	$bank = PaymentBank::where(['id'=>$id])->first();

        $date = date('ymdhis');

     	$bank->attachment = 'storage'.'-'.$date.'-'.$bank->id.'_bank_details.pdf';

     	$bank->save();
     	
	    // Send data to the view using loadView function of PDF facade
	    $pdf = PDF::loadView('bank-exported', ['bank'=>$bank]);

	    // If you want to store the generated pdf to the server then you can use the store function

	    $customer = $bank->email;

	    $pdf->save(storage_path().'-'.$date.'-'.$id.'_bank_details.pdf');

	   	session(['bank_info' =>$bank->id]);

        //send one copy to customer
	   	\Mail::to($customer)->send(new \App\Mail\EmailBank());

        //send another copy to admin

        $admin = 'test@bsaitechnosales.com';

        \Mail::to($admin)->send(new \App\Mail\EmailBankAdmin());


        Session::flash('message', 'Thank you for providing us bank details!.Check your email for more details'); 
        Session::flash('alert-class', 'alert-success'); 

        return redirect('pay-bank-customer');
        
	    // Finally, you can download the file using download function
	    /*return $pdf->download('customers.pdf');*/

    }

    public function exportCashPdf($id){

    	$cash = PaymentCash::where(['id'=>$id])->first();

        $date = date('ymdhis');

    	$cash->attachment = 'storage'.'-'.$date.'-'.$cash->id.'_credit_details.pdf';


        $cash->save(); 


        $customer = $cash->email;


	    // Send data to the view using loadView function of PDF facade
	    $pdf = PDF::loadView('exported', ['cash'=>$cash]);

	    // If you want to store the generated pdf to the server then you can use the store function
	    $pdf->save(storage_path().'-'.$date.'-'.$id.'_credit_details.pdf');

	   	session(['cash_info' =>$cash->id]);


	   	\Mail::to($customer)->send(new \App\Mail\EmailCash());


        $admin = 'test@bsaitechnosales.com';

        \Mail::to($admin)->send(new \App\Mail\EmailCashAdmin());

        Session::flash('message', 'Thank you for providing us credit details!.Check your email for more details'); 

        Session::flash('alert-class', 'alert-success'); 
        
        return redirect('pay-cash-customer');

    }
}
