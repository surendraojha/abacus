<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\User;

use App\Contact;

Use App\PaymentCash;

use Session;

class EmailCash extends Mailable{
    
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(){
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build(){

        
        $payment_cash = PaymentCash::find(\Session::get('cash_info'));

       /* echo asset($payment_cash->attachment);

        die;*/

        return $this->view('emails.send-mail-cash-customer')->subject("Credit Details")->attach(asset($payment_cash->attachment));

    }


}
