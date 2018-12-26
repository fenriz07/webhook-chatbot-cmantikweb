<?php

namespace App\Repositories;

class Domain
{

    public function getPrice($agent)
    {

        $parameters =  $agent->getParameters();

        $suggestion = \Dialogflow\RichMessage\Suggestion::create(['Suggestion one', 'Suggestion two']);

        return $suggestion;

        return "Hola el dominio $parameters->domain tiene un costo de 10$(USD)";

    }
    
}
