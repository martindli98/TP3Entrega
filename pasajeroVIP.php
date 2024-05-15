<?php

class PasajeroVIP extends Pasajero{
    private $numeroViajeroFrecuente;
    private $cantidadMillas;

    public function __construct($nombre,$numeroAsiento,$numeroTicket,$numeroViajeroFrecuente,$cantidadMillas){
        parent::__construct($nombre,$numeroAsiento,$numeroTicket);
        $this->numeroVajeroFrecuente=$numeroViajeroFrecuente;
        $this->cantidadMillas=$cantidadMillas;
    }

    public function getNumeroViajeroFrecuente(){
        return $this->numeroViajeroFrecuente;
    }

    public function setNumeroViajeroFrecuente($numeroViajeroFrecuente){
        $this->numeroViajeroFrecuente = $numeroViajeroFrecuente;
    }

    public function getCantidadMillas(){
        return $this->cantidadMillas;
    }

    public function setCantidadMillas($cantidadMillas){
        $this->cantidadMillas = $cantidadMillas;
    }

    public function __toString(){
        $cadena = parent :: __toString();
        $cadena.= "Numero de viajero frecuente: ".$this->getNumeroViajeroFrecuente()."\n";
        $cadena.= "Cantidad de millas: ".$this->getCantidadMillas()."\n";

        return $cadena;
    }
    
    public function darPorcentajeIncremento(){
        $porcentaje = parent::darPorcentajeIncremento();
        $millas=$this->getCantidadMillas();
        if ($millas>300){
            $porcentaje=20/100;
        }
        else{
            $porcentaje=25/100;
        }
        return $porcentaje;
    }
}