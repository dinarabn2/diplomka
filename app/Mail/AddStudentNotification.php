<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Student;

class AddStudentNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $student;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('settings.mail_from_address'), 'Notification')
            ->view('emails.notification')
            ->subject('"Әлеуметтік қолдау" орталығы')
            ->with([
                'name' => $this->student->name,
                'surname' => $this->student->surname,
                'email' => $this->student->email
            ]);
    }
}
