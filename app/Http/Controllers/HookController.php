<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dialogflow\WebhookClient;

class HookController extends Controller
{


    public function point(Request $request)
    {
        $agent = WebhookClient::fromData($request->json()->all());
        $intent = $agent->getIntent();
        $parameters = $agent->getParameters();

        $agent->reply("$intent" . $parameters['numero']);

        return response()->json($agent->render());
        //return dd($request);
    }
}
