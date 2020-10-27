<?php

class PedidoCompra {

    private $fecha;
    private $proveedor;
    private $fechaEstimada;
    private $costoTotal;
    private $pedidoCerrado;
    private $listaLineasCompras = array();

    public function getFecha(){
        return $this->fecha;
    }
    public function setFecha($fecha){
        $this->fecha=$fecha;
    }

    public function getFecProveedor(){
        return $this->proveedor;
    }
    public function setProveedor($prov){
        $this->proveedor=$prov;
    }

    public function getFechaEstimada(){
        return $this->fechaEstimada;
    }
    public function setFechaEstimada($fe){
        $this->fechaEstimada=$fe;
    }

    public function getCostoTotal(){
        return $this->costoTotal;
    }
    public function setCostoTotal($cost){
        $this->costoTotal=$cost;
    }

    public function getPedidoCerrado(){
        return $this->pedidoCerrado;
    }
    public function setPedidoCerrado($pedc){
        $this->pedidoCerrado=$pedc;
    }

    public function setListaLineasCompras(){
        return $this->listaLineasCompras;
    }
    public function setLineaCompra($lc){
        $this->listaLineasCompras[]=$lc;
    }

    public function mostrarInformacion(){
        
    }


}