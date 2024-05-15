<?php

class Pasajero{
    private $nombre;
    private $numeroAsiento;
    private $numeroTicket;

    public function __construct($nombre,$numeroAsiento,$numeroTicket){
        $this->nombre=$nombre;
        $this->numeroAsiento=$numeroAsiento;
        $this->numeroTicket=$numeroTicket;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNumeroAsiento(){
        return $this->numeroAsiento;
    }

    public function setNumeroAsiento($numeroAsiento){
        $this->numeroAsiento = $numeroAsiento;
    }

    public function getNumeroTicket(){
        return $this->numeroTicket;
    }

    public function setNumeroTicket($numeroTicket){
        $this->numeroTicket = $numeroTicket;
    }

    public function __toString(){
        $cadena = "Nombre: ".$this->getNombre()."\n";
        $cadena.= "Numero de asiento: ".$this->getNumeroAsiento()."\n";
        $cadena.= "Numero de ticket: ".$this->getNumeroTicket()."\n";

        return $cadena;
    }

    public function darPorcentajeIncremento(){
        $porcentaje=10/100;
        return $porcentaje;
    }
}