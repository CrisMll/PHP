<?php

/**
 * Jugador
 * -	numeroJug: integer
 * -	ptos: integer
 * +	construct(numeroJug:integer):void
 * + getNumJug():integer
 * + getPtos():integer
 * + addPtos(ptos:integer):void
 */

class Jugador {

    private $numJug;
    private $ptos = 0;


    public function __construct(int $numJug) {
        $this->numJug = $numJug;
        echo nl2br("\nSe ha creado un nuevo jugador con el dorsal $this->numJug");
    }

    public function getNumJug(){
        echo nl2br("El jugador tiene el dorsal $this->numJug\n");
        return $this->numJug;
    }

    public function getPtos(){
        echo nl2br("El jugador $this->numJug tiene anotados un total de $this->ptos puntos \n");
        return $this->ptos;
    }

    public function addPtos($nuevosPuntos){
        if ($nuevosPuntos < 0) {
            echo nl2br("Los puntos introducidos no son correctos para el jugador $this->numJug.\n");
        } else {
            $this->ptos += $nuevosPuntos;
            echo nl2br("\nSe han añadido $nuevosPuntos puntos al jugador $this->numJug.\n");
        }
        return $this->ptos;
    
    }


















}













































?>