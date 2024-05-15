<?php

class PasajeroEstandar extends Pasajero{

    public function __construct($nombre,$numeroAsiento,$numeroTicket){
        parent::__construct($nombre,$numeroAsiento,$numeroTicket);
    }

    public function darPorcentajeIncremento(){
        $porcentaje= parent::darPorcentajeIncremento();
        return $porcentaje;
    }

    public function __toString(){
        $cadena = parent :: __toString();
        $cadena.= "Servicio/s: ".$this->getServicio()."\n";

        return $cadena;
    }
}