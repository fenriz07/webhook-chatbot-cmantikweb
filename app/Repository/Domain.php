<?php namespace App\Repositories;

use Dialogflow\Action\Responses\Suggestions;

class Domain
{

    public function getPrice($agent)
    {

        $parameters =  $agent->getParameters();

        $conv = $agent->getActionConversation();

        $conv->ask("Hola el dominio $parameters->domain tiene un costo de 10$(USD). ¿Desea comprarlo?");

        $conv->ask(new Suggestions(['Si', 'No']));

        return $conv;

        return $suggestion;

        return "Hola el dominio $parameters->domain tiene un costo de 10$(USD)";

    }
    
}
