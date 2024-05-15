<?php

/*
La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes.
 De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.

Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de 
dicha clase (incluso los datos de los pasajeros). Utilice clases y arreglos  para   almacenar la información
 correspondiente a los pasajeros. Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.

Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita 
cargar la información del viaje, modificar y ver sus datos.

Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido,
 numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero.
  También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree 
  una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellido.
   La clase Viaje debe hacer referencia al responsable de realizar el viaje.

Implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. 
Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos.
 Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información 
 del responsable del viaje.
*/
class Viaje{
    private $costoViaje;
    private $destino;
    private $cantidadMaxima;
    private $pasajeros;
    private $sumaCostosAbonados;

    public function __construct($costoViaje, $destinoV, $cantidadMaximaV, $pasajerosV){
        $this-> costoViaje = $costoViaje;
        $this -> destino = $destinoV;
        $this -> cantidadMaxima = $cantidadMaximaV;
        $this -> pasajeros = $pasajerosV;
        $this-> sumaCostosAbonados = 0;
    }

    public function getDestino(){
        return $this -> destino;
    }

    public function getCantidadMaxima(){
        return $this-> cantidadMaxima;
    }
    
    public function getPasajeros(){
        return $this -> pasajeros;
    }

    public function getCostoViaje(){
        return $this-> costoViaje;
    }

    public function getSumaCostosAbonados(){
        return $this-> sumaCostosAbonados;
    }

    public function setDestino($destinoV){
        $this -> destino = $destinoV;
    }

    public function setCantidadMaxima($cantidadMaximaV){
        $this-> cantidadMaxima = $cantidadMaximaV;
    }
    
    public function setPasajeros($pasajerosV){
        $this -> pasajeros = $pasajerosV;
    }

    public function setCostoViaje($costoViaje){
        $this-> costoViaje = $costoViaje;
    }

    public function setSumaCostosAbonados($sumaCostosAbonados){
        $this-> sumaCostosAbonados = $sumaCostosAbonados;
    }

    /* public function modificarPasajero($documento, $modificarNombre, $modificarApellido, $modificarTelefono) {
        $pasajeros = $this->getPasajeros();
        $encontrado = false; 
        foreach ($pasajeros as $pasajero) {
            if ($pasajero->getDni() == $documento) {
 
                $pasajero->setNombre($modificarNombre);
                $pasajero->setApellido($modificarApellido);
                $pasajero->setTelefono($modificarTelefono);
               
                $encontrado = true;

        }
    
        }
        return $encontrado;
    } */

    /* public function agregarPasajero($nuevoPasajero) {
        $pasajeros = $this->getPasajeros();
        $valor = true;
        
        foreach ($pasajeros as $pasajero) {
            if ($pasajero->getDni() == $nuevoPasajero->getDni()) {
                $valor = false;  
            }
        }
        if (count($pasajeros) >= $this->getCantidadMaxima()) {
            $valor = false;
        }

        if ($valor==true) {
            $pasajeros[] = $nuevoPasajero;
            $this->setPasajeros($pasajeros);
        }
        return $valor; 
    }

    public function modificarResponsable($nuevoResponsable){
        $this->setResponsable($nuevoResponsable);
    } */

    public function hayPasajesDisponible(){
        $valor= false;
        if (count($this->pasajeros) < $this->getCantidadMaxima()){
            $valor=true;
        }
        return $valor;
    }

    public function venderPasaje($objPasajero){
        $venta=0;
        if ($this->hayPasajesDisponible()){
            $colPasajeros= $this->getPasajeros();
            $colPasajeros[]=$objPasajero;
            $porcentaje= $objPasajero->darPorcentajeIncremento();
            $venta= $this->getCostoViaje()+($this->getCostoViaje()*$porcentaje);
            $costosAbonados=$this->getSumaCostosAbonados()+$venta;
            $this->setSumaCostosAbonados($costosAbonados);
            $this->setPasajeros($colPasajeros);
        }
        return $venta;
    }

    public function mostrarPasajeros(){
        $cadena="";
        foreach ($this->getPasajeros() as $pasajero){
            $cadena.=$pasajero."\n";
        }
        return $cadena;
    }
    
    public function __toString(){
        $cadena = "Costo del viaje: ".$this->getCostoViaje()."\n";
        $cadena.= "Destino: ".$this->getDestino()."\n";
        $cadena.= "Cantidad maxima de pasajeros: ".$this->getCantidadMaxima()."\n";
        $cadena.= "Pasajeros: \n".$this->mostrarPasajeros()."\n";
        $cadena.= "Suma de los costos abonados por pasajeros: ".$this->getSumaCostosAbonados()."\n";

        return $cadena;
    }
}

?>