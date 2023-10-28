<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use function route;

class UnverifiedEmailReminder extends Mailable
{
    use Queueable, SerializesModels;

    public int $email_verification_code;

    /**
     * Create a new message instance.
     */
    public function __construct(int $email_verification_code)
    {
        $this->email_verification_code = $email_verification_code;
    }

    public function build(): UnverifiedEmailReminder
    {
        return $this->subject("{$this->email_verification_code} is your verification code")
            ->view('emails.email-confirmation', [
                'code' => $this->email_verification_code,
                'url' => route('verification.notice'),
            ]);
    }
}
