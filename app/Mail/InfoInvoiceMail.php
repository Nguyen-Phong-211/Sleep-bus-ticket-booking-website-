<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class InfoInvoiceMail extends Mailable
{
    use Queueable, SerializesModels;
    public $invoiceImagePath;

    /**
     * Create a new message instance.
     */
    public function __construct($invoiceImagePath)
    {
        //
        $this->invoiceImagePath = $invoiceImagePath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thông tin hoá đơn của bạn',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.send-invoice',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            // Attachment::fromPath(public_path($this->invoiceImagePath))
            //     ->as('invoice.png')
            //     ->withMime('image/png')
        ];
    }

}
