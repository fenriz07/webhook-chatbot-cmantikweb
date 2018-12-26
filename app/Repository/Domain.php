<?php namespace App\Repositories;

use Dialogflow\Action\Responses\Suggestions;

class Domain
{

    public function getPrice($agent)
    {

        $parameters =  (object) $agent->getParameters();

        $suggestion = \Dialogflow\RichMessage\Suggestion::create(['Suggestion one', 'Suggestion two'],"Hola el dominio $parameters->domain tiene un costo de 10$(USD)");

        return $suggestion;

        return "Hola el dominio $parameters->domain tiene un costo de 10$(USD)";

    }
    
}
