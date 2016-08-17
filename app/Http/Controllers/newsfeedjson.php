<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Newsfeed;

class newsfeedjson extends Controller
{
    //
    public function show_all_news_feed(){
        
        $all_news_feed = Newsfeed::where('priority','>','0')->get();
        return json_encode($all_news_feed);
    }
}
