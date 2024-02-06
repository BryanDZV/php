<?php

class coche
{
    //su clase con su atributo

    no usages
    private string $marca;
    no usages
    private string $modelo;
    no usages
    private string $matricula;=
    no usages
    private int $kilometrosRecorridos;
    no usages
    private float $cantidadCombustible;

    //constructor
    no usages
    public function __contructor(string $marca, string $modelo)

    
    {
        $this->marca=$marca;
        $this->modelo= $modelo; 


        $this->kilometrosRecorridos= 0;
        $this->cantidadCombustible= 0;
    
    
    
    }






//metodo
no usages
function repostarCombustible(float $cantidadCombustible){
    //modificar un atributo cuando usas this vas a acceder a algo dentro de coche
    $this->cantidadCombustible+=$cantidadCombustible;

}

no usages
function viajar(int $distancia){
    $this->KilometrosRecorridos+=$distancia;
    $this->cantidadCombustible-=$distancia * 0.05;
}
no usages
function pasarITV(){

}
    
}