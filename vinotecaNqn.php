<?php

/*Esta funcion genera un arreglo con las características  mencionadas y retorne  un arreglo que por variedad de vino guarde la cantidad total de botellas y el precio promedio.
* @param array $tipoDeVinos
*/
function cantidadYPromedio($tipoDeVinos){
    $cantidadPromedio = array();
    for ($i = 0 ;$i < count($tipoDeVinos);$i++){
        $k = key($tipoDeVinos);
        $cantidadPromedio [$k] = ["precioPromedio" => round ((array_sum($tipoDeVinos[$k]["precio"]))/count($tipoDeVinos[$k]["precio"])),
        "stockTotal" => (array_sum($tipoDeVinos[$k]["cantidadBotellas"])),];
        next($tipoDeVinos);
    }
    reset($tipoDeVinos);
    return $cantidadPromedio;
}


//Genera arreglos de variedad de vinos.

    $tipoDeVinos = array ();
    $tipoDeVinos["Malbec"] = array(
        "variedad"=> ["Amargo", "Dulce", "Seco"],
        "cantidadBotellas"=> [20, 55, 15],
        "anioElaboracion"=> [1988, 1990, 1991],
        "precio"=> [500, 700, 650]
    );
    $tipoDeVinos["Cabernet Sauvignon"] = array(
        "variedad"=> ["Semidulce", "Dulce", "Semiamargo"],
        "cantidadBotellas"=> [40, 33, 61],
        "anioElaboracion"=> [1999, 1994, 2002],
        "precio"=> [370, 820, 130]
    );
    $tipoDeVinos["Merlot"] = array(
        "variedad"=> ["Seco", "Semiseco", "Dulce"],
        "cantidadBotellas"=> [53, 26, 22],
        "anioElaboracion"=> [1987, 2014, 2007],
        "precio"=> [500, 360, 770]
    );
    
    $cantidadPro = cantidadYPromedio($tipoDeVinos);

   /* print_r($cantidadPro);*/

    echo ("Stock de botellas por vino Malbec:" . $cantidadPro["Malbec"]["stockTotal"])."\n";
    echo ("Precio promedio de vino Malbec:" . $cantidadPro["Malbec"]["precioPromedio"])."\n";

    echo ("Stock de botellas por vino Cabernet Sauvignon:" . $cantidadPro["Cabernet Sauvignon"]["stockTotal"])."\n";
    echo ("Precio promedio de vino Cabernet Sauvignon:" . $cantidadPro["Cabernet Sauvignon"]["precioPromedio"])."\n";

    echo ("Stock de botellas por vino Merlot:" . $cantidadPro["Merlot"]["stockTotal"])."\n";
    echo ("Precio promedio de vino Merlot:" . $cantidadPro["Merlot"]["precioPromedio"])."\n";