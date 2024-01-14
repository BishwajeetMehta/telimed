<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointmentMail extends Mailable
{
    use Queueable, SerializesModels;
 

  protected $status;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($status)
    {
       $this->status=$status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $status=$this->status;
        return $this->view('frontend.appointmentmail',compact('status'))->subject('Appointment Status from Telimed');
    }
}
