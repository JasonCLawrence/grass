<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewCustomerAccountMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $password;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Email subject
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Grass Roots Account Details',
        );
    }

    /**
     * Email view
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.new-customer-account',
        );
    }

    /**
     * Attachments
     */
    public function attachments(): array
    {
        return [];
    }
}