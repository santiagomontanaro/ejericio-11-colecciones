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

    public function getProveedor(){
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

    public function getListaLineasCompras(){
        return $this->listaLineasCompras;
    }
    public function setLineaCompra($lc){
        $this->listaLineasCompras[]=$lc;
    }

    public function mostrarInformacion(){
        
        echo 'Fecha: ' . $this->getFecha() . '<br>';
        echo 'Proveedor: ' . $this->getProveedor()->getDescripcion() . '<br>';
        echo 'Fecha estimada de entrega: ' . $this->getFechaEstimada() . '<br>';
        echo 'Costo total: ' . $this->getCostoTotal() . '<br>';
        echo 'Pedido cerrado: ' . $this->getPedidoCerrado() . '<br>' . '<br>';
        
        foreach($this->getListaLineasCompras() as $linc)
        {
            echo 'Linea de compra' . '<br>';
            echo 'Cantidad: ' . $linc->getCantidad() . '<br>';
            echo 'Costo unitario: ' . $linc->getCostoUnitario() . '<br>';
            echo 'Entregado: ' . $linc->getFueEntregado() . '<br>';
            echo '<b>Producto:</b>'  . '<br>';
            foreach($linc->getProducto() as $prod)
            {
                echo 'Codigo del producto: ' . $prod->getCodigo() . '<br>';
                echo 'Descripción: ' . $prod->getDescripcion() . '<br>';
                echo 'Precio de venta: ' . $prod->getPrecioVenta() . '<br>' . '<br>';
            }
        }
    }


}