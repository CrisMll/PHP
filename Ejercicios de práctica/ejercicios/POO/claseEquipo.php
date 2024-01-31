<?php

/**
 * Equipo
 * - jugadores: array Jugador
 * +	construct():void
 * + addJug(jugador:Jugador):void
 * + getJug(numJugador:integer):Jugador
 * 
 */

class Equipo{

    private $jugadores = [];

    public function __construct() {
    }

    public function addJug(Jugador $jugador){
        $this->jugadores[] = $jugador;
        return $this->jugadores;
    }

    public function getTotal(){
        echo ("<h2>Conteo total de puntos por jugador: </h2>");
        $total = 0;
        foreach($this->jugadores as $jugador){
            $total += $jugador->getPtos();
        }
        echo nl2br("El equipo tiene un total de $total puntos.\n");
        return $total;
    }

    }

























?>