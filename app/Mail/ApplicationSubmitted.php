<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $applicationData;

    /**
     * Create a new message instance.
     *
     * @param  array  $applicationData
     * @return void
     */
    public function __construct(array $applicationData)
    {
        $this->applicationData = $applicationData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Application Submitted Successfully')
            ->view('emails.application_submitted')
            ->with('applicationData', $this->applicationData);
    }
}
