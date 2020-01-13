<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\User;

use App\Contact;

use Session;

class MyClientEmail extends Mailable
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

        $contact = Contact::find(\Session::get('contact_person'));
        
        
        $full_name = $contact->first_name.' '.$contact->last_name;

    return $this->view('emails.send-mail-client',['contact'=>$contact])->subject("Abacus Insurance Auto Reply");

    }


}
