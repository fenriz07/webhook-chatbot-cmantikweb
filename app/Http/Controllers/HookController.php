<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dialogflow\WebhookClient;

class HookController extends Controller
{


    public function point(Request $request)
    {
        return "epa";
        $agent = WebhookClient::fromData($request->json()->all());

        $agent->reply('Hi, how can I help?');

        return response()->json($agent->render());
        //return dd($request);
    }
}
