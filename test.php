<?php

include 'pasajero.php';
include 'pasajeroVIP.php';
include 'pasajeroNecesidad.php';
include 'viaje.php';


    $pasajero1 = new PasajeroEstandar("ZinedineZenon",22,22);
    $pasajero2 = new PasajeroEstandar("Mediosna",13,25);
    $pasajero3 = new PasajeroVIP("Crackvani",10,8,4,400);
    $pasajero4 = new PasajeroVIP("LABESTIA",9,2,6,270);
    $pasajero5 = new PasajeroNecesidad("FrankFabra",4,19,3);
    $pasajero6 = new PasajeroNecesidad("PolFernandez",8,9,3);

$viaje = new Viaje(15000,"Bolivia",25,[]);
echo "\n----------------------------------\n";
$viaje->venderPasaje($pasajero1);


echo "\n--------------------------------\n";
echo $viaje;