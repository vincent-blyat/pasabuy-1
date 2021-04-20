<?php

namespace App\Notifications;

use App\Models\userInformation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class cancelledRequestNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $postNumber;
    public function __construct($postNumber)
    {
        //
        $this->postNumber = $postNumber;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }


    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toDatabase($notifiable)
    {
        $user = userInformation::where('email',Auth::user()->email)->get();
        return [
            'canceller' => $user[0]->firstName.' '.$user[0]->lastName,
            'postNumber' => $this->postNumber,
            'cancellerPic' =>  "http://localhost:8000/storage/images/".$user[0]->profilePicture,
        ];
    }

    public function toBroadcast($notifiable)
    {
        $user = userInformation::where('email',Auth::user()->email)->get();
        return new BroadcastMessage([
            'canceller' => $user[0]->firstName.' '.$user[0]->lastName,
            'postNumber' => $this->postNumber,
            'cancellerPic' =>  "http://localhost:8000/storage/images/".$user[0]->profilePicture,

        ]);
    }

}
