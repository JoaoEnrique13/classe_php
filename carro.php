<?php
class carro{
    public $velocidade = 0;
    public $ligado = false;

    public function ligar(){
        $ligado = true;
    }

    public function desligar(){
        $ligado = false;
    }
}