<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestSendingEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subjectLine;
    public $bodyContent;

    /**
     * Create a new message instance.
     */
    public function __construct( string $subjectLine, $bodyContent)
    {
        $this->subjectLine = $subjectLine;
        $this->bodyContent = $bodyContent;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope{

        return new Envelope(
            from: new Address('aaa@mail.com', 'Dinar'),
            replyTo: [
                new Address('bbb@mail.com', 'bbb')
            ],
            subject: $this->subjectLine,
        );
    }
    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'sendEmail.temlate', // Buat view terpisah jika perlu
            with: [
                'subjectLine' => $this->subjectLine,
                'bodyContent' => $this->bodyContent
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
