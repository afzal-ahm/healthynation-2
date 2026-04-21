<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Enquiry'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.contact',
            with: [
                'fname'    => $this->data['fname'],
                'number'   => $this->data['number'],
                'stime'    => $this->data['stime'],
                'email'    => $this->data['email'],
                'address'  => $this->data['address'],
                'filePath' => $this->data['filePath'] ?? null,
            ],
        );
    }

    public function attachments(): array
    {
        $attachments = [];
        if (!empty($this->data['filePath'])) {
            $attachments[] = Attachment::fromPath(storage_path('app/' . $this->data['filePath']));
        }
        return $attachments;
    }
}
