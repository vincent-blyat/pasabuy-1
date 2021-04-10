<?php

namespace App\Notifications;

use App\Models\userInformation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class SharedNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $postNumber;
    public function __construct($postNumber)
    {
        //
        $this->postNumber = $postNumber;
    }

 
    public function via($notifiable)
    {
        return ['database'];
    }


    public function toDatabase($notifiable)
    {
        $user = userInformation::where('email',Auth::user()->email)->get();
        return [
            'sharer' => $user[0]->firstName.' '.$user[0]->lastName,
            'postNumber' => $this->postNumber,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */

}
