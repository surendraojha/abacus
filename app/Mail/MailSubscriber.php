<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Session;

class MailSubscriber extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $subject;

    public $content;

    public $attachment;

    public function __construct($subject, $content,$attachment=null){

        $this->subject = $subject;

        $this->content = $content;

        $this->attachment = $attachment;

    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build(){

      
        //$content = \Session::get('content');

        if ($this->attachment==null) {

             return $this->view('emails.send-mail-subscriber',['subject'=>$this->subject,'content'=>$this->content])->subject("Mail From Abacus");

        }else{

            return $this->view('emails.send-mail-subscriber',['subject'=>$this->subject,'content'=>$this->content])->subject("Mail From Abacus")->attach(asset('public/public/uploads/'.$this->attachment));
        }
       

    }


}
