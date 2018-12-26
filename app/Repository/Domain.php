<?php namespace App\Repositories;

use Mail;
use App\Mail\BuyDomainMail;
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

        $cliente =  (object) $agent->getParameters();
        
        Mail::to($cliente->correo)->send(new BuyDomainMail($cliente));

        return "Listo $cliente->nombre, te he enviado un correo al $cliente->correo con las instrucciones para finalizar la compra.";
    }
    
}
