<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use App\Services\WhacenterService;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PembayaranNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    private $pembayaran;
    public function __construct($pembayaran)
    {
        $this->pembayaran = $pembayaran;
    }
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return ['database', WhacenterChannel::class];
        return ['database'];

    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'tagihan_id' => $this->pembayaran->tagihan_id,
            'wali_id' => $this->pembayaran->wali_id,
            'title' => 'Pembayaran Tagihan',
            'messages' => $this->pembayaran->wali->name  .  ' Melakukan Pembayaran Tagihan .',
            'url' => route('pembayaran.show', $this->pembayaran->id),
        ];
    }

    //tutor 97
    //   public function toWhacenter($notifiable)
    // {
    //     return (new WhacenterService())
    //         ->to($this->pembayaran->nohp)
    //         ->line("Transaksi Pembayaran, " . $this->pembayaran->name)
    //         ->line('Pembayaran kamu berhasil.');
    // }
}
