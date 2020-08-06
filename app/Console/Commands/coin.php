<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class coin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:coin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // get coin market
        $url = "https://vicuta.com/api/getMarket";
        $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n")); 
        //Basically adding headers to the request
        $context = stream_context_create($opts);
        $html = file_get_contents($url,true,$context);
        $result = json_decode($html);
        $buy = 0;
        $sell = 0;

        foreach($result as $item){
            if($item->assetName == "XRP"){
                $buy = number_format($item->buyPrice);
                $sell = number_format($item->sellPrice);
                break;
            }
        }

        // notification
        $now = date('d/m/Y H:i:s');

        $heading      = array(
        "en" => 'XRP coin '.$now
        );
        $content      = array(
        "en" => 'Buy: '.$buy.' / Sell: '.$sell
        );
        $hashes_array = array();
        array_push($hashes_array, array(
            "id" => "like-button",
            "text" => "View detail",
            // "icon" => "http://i.imgur.com/N8SN8ZS.png",
            "url" => "https://7afa3be434fc.ngrok.io/coin"
        ));
    
        $fields = array(
            'app_id' => "7182ed94-e2ce-4230-9912-2d96828f4cd0",
            'included_segments' => array(
                'All'
            ),
            'data' => array(
                "foo" => "bar"
            ),
            'headings' => $heading,
            'contents' => $content,
            'web_buttons' => $hashes_array
        );
        
        $fields = json_encode($fields);
        print("\nJSON sent:\n");
        print($fields);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic ZGJhYzZmZjgtNTczMy00ODFhLTk3ZmItMjU2NTk2YmEzMDk4'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        
        $response = curl_exec($ch);
        curl_close($ch);
        
        return $response;
    }
}
