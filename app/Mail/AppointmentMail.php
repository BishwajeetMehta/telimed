<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointmentMail extends Mailable
{
    use Queueable, SerializesModels;
 

    private $appointmail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appointmail)
    {
       $this->appointmail=$appointmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        dd($appointmail);
        $appointmail=$this->appointmail;
        return $this->view('frontend.appointmentmail',compact('appointmail'))->subject('Appointment approval from telimed');
    }
}
