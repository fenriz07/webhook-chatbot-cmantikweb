<?php namespace App\Repositories;

use Dialogflow\Action\Responses\Suggestions;

class Domain
{

    public function getPrice($agent)
    {

        $options = ['Si','No'];

        $parameters =  (object) $agent->getParameters();

        $title   = "Hola el dominio $parameters->domain tiene un costo de 10$(USD). ¿Desea comprarlo?";

        $suggestion = Suggestion::create($options,$title);

        return $suggestion;
    }
    
}
