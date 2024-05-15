<?php

class PasajeroNecesidad extends Pasajero{
    private $servicio;

    public function __construct($nombre,$numeroAsiento,$numeroTicket,$servicio){
        parent::__construct($nombre,$numeroAsiento,$numeroTicket);
        $this->servicio=$servicio;
    }

    public function getServicio(){
        return $this->servicio;
    }

    public function setServicio($servicio){
        $this->servicio = $servicio;
    }

    public function __toString(){
        $cadena = parent :: __toString();
        $cadena.= "Servicio/s: ".$this->getServicio()."\n";

        return $cadena;
    }

    public function darPorcentajeIncremento(){
        $porcentaje = parent:: darPorcentajeIncremento();
        $servicios=$this->getServicio();
        if ($servicios==1 || $servicios==2){
            $porcentaje=5/100;
        }
        if ($porcentaje==3){
            $porcentaje=20/100;
        }
    }
}