<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DenunciaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $denuncias;
    /**
     * Create a new message instance.
     */
    public function __construct($denuncias)
    {
        $this->denuncias = $denuncias;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Denuncia CRA',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.mail',
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

    public function failed()
    {
        // Guardamos el mensaje de error en la sesión
        session()->flash('error', 'Se ha producido un error al enviar el correo electrónico.');
    }
}
