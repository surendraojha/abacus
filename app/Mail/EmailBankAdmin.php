<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\User;

use App\Contact;

Use App\PaymentBank;

use Session;

class EmailBankAdmin extends Mailable
{
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

      
        $payment_bank = PaymentBank::find(\Session::get('bank_info'));

        //$contact = Contact::find(\Session::get('contact_person'));

    return $this->view('emails.send-mail-bank-admin',['payment_bank'=>$payment_bank])->subject("Bank Details")->attach(asset($payment_bank->attachment));

    }


}
