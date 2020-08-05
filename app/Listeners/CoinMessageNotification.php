<?php

namespace App\Listeners;

use App\Events\CoinMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use NNV\OneSignal\OneSignal;
use NNV\OneSignal\API\Notification;


class CoinMessageNotification
{
    private $oneSignal;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->oneSignal = new OneSignal(
            env("ONESIGNAL_AUTH_KEY"), env("ONESIGNAL_APP_ID"), env("ONESIGNAL_APP_REST_KEY")
        );

    }

    /**
     * Handle the event.
     *
     * @param  CoinMessage  $event
     * @return void
     */
    public function handle(CoinMessage $event)
    {
        $oneSingalNotification = new Notification($this->oneSignal);
        // $coin = $event->coin;
        $notificationData = [
            "included_segments" => ["All"],
            "contents" => [
                "en" => "okkk",//$coin->name,
            ],
            "headings" => [
                "en" => "ok",//$coin->buy.'/'.$coin->sell,
            ],
            "web_buttons" => [
                [
                    "id" => "readmore-button",
                    "text" => "Read more",
                    "url" => " https://45162191b148.ngrok.io/coin" ,
                ]
            ],
            "isChromeWeb" => true,
        ];
 
        $notification = $oneSingalNotification->create($notificationData);
 
    }

}
