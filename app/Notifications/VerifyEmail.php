<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;

class VerifyEmail extends VerifyEmailBase
{
//    use Queueable;

    // change as you want
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }
        return (new MailMessage)
            ->subject(Lang::getFromJson('Verify Email Address'))
            ->line(Lang::getFromJson('With Scroda being the next-generation, revolutionized infrastructure, directed towards realizing true global democracy, true freedom, and true equality. We believe that the success of such mission relies directly in ridding the world of hunger and poverty. This presents the Scroda function where all Scroda ID users within the Scroda network, will receive monthly rewards of SCR. 
'))
            ->line('Limited Edition Scroda ID Headset Offer')
            ->line('The Scroda ID headset is the access point to the unrestricted use of Scroda’s infrastructure, any participant who has obtained over 50,000 SCR during phase 1 of the Coin Distribution Event will receive a limited edition Scroda ID-accessing headset, upon the purchase of their Scroda ID headset.
')
            ->line('If you are ready to proceed as part of the Scroda family please click the link below.
')
            ->action(
                Lang::getFromJson('Verify Email Address'),
                $this->verificationUrl($notifiable)
            )
            ->line(Lang::getFromJson('If you did not create an account, no further action is required.'));
    }
}