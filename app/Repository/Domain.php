<?php namespace App\Repositories;

use Log;
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
        $cliente = $agent->getParameters();

        //Log::debug($cliente);
        
        Mail::to($cliente["correo"])->queue(new BuyDomainMail($cliente));

        $nombre = $cliente["nombre"];
        $correo = $cliente["correo"];
        $dominio = $cliente["dominio"];

        return "Listo $nombre, te he enviado un correo al $correo con las instrucciones para finalizar la compra de $dominio";
    }
    
}
