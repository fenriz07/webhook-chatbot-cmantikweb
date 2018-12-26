<?php

namespace App\Repositories;

class Domain
{

    public function getPrice($agent)
    {

        $parameters = (object) $agent->getParameters();


        return "Hola el dominio $parameters->domain tiene un costo de 10$(USD)";

    }
    
}
