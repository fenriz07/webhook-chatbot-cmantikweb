<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Domain;
use Dialogflow\WebhookClient;

class HookController extends Controller
{
    protected $domain;

    public function __construct(Domain $domain)
    {
        $this->domain = $domain;
    }


    public function point(Request $request)
    {
        $agent = WebhookClient::fromData($request->json()->all());

        $result = $this->getObjectMethod($agent);

        $agent->reply($result);

        return response()->json($agent->render());
        
    }

    private function getObjectMethod($agent)
    {

        $om = explode('_',$agent->getIntent());
        
        return $this->{$om[0]}->{$om[1]}($agent);
        
    }
}
