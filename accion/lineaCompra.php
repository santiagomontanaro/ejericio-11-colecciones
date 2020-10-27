<?php

class LineaCompra {
    private $producto = array();
    private $cantidad;
    private $costoUnitario;
    private $fueEntregado;

    public function getProducto(){
        return $this->producto;
    }
    public function setProducto($pr){
        $this->producto[]=$pr;
    }

    public function getCantidad(){
        return $this->cantidad;
    }
    public function setCantidad($cant){
        $this->cantidad=$cant;
    }

    public function getCostoUnitario(){
        return $this->costoUnitario;
    }
    public function setCostoUnitario($cou){
        $this->costoUnitario=$cou;
    }

    public function getFueEntregado(){
        return $this->fueEntregado;
    }
    public function setFueEntregado($ent){
        $this->fueEntregado=$ent;
    }
}