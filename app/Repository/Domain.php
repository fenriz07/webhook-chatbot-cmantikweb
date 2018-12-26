<?php namespace App\Repositories;

use Dialogflow\RichMessage\Suggestion;

class Domain
{

    public function getPrice($agent)
    {

        $options = ['Si','No'];

        $parameters =  (object) $agent->getParameters();

        $price   = rand(10,2000);

        $title   = "Hola el dominio $parameters->domain tiene un costo de $price $(USD). ¿Desea comprarlo?";

        $suggestion = Suggestion::create($options,$title);

        return $suggestion;
    }

    public function setDataPersonal($agent)
    {
        return 'Listo, te he enviado un correo con las instrucciones para finalizar la compra.';
    }
    
}
