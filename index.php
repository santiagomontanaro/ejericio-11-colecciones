<?php

require_once 'accion/lineaCompra.php';
require_once 'accion/pedidoCompra.php';
require_once 'accion/producto.php';
require_once 'accion/proveedor.php';

$prov = new Proveedor();
$prov -> setId(1);
$prov -> setDescripcion(2);

$prod1 = new Producto();
$prod1 -> setCodigo(3);
$prod1 -> setDescripcion(4);
$prod1 -> setPrecioVenta(5);

$prod2 = new Producto();
$prod2 -> setCodigo(6);
$prod2 -> setDescripcion(7);
$prod2 -> setPrecioVenta(8);

$lincompra1 = new LineaCompra();
$lincompra1 -> setProducto($prod1);
$lincompra1 -> setCantidad(10);
$lincompra1 -> setCostoUnitario(11);
$lincompra1 -> setFueEntregado('si');

$lincompra2 = new LineaCompra();
$lincompra2 -> setProducto($prod2);
$lincompra2 -> setCantidad(12);
$lincompra2 -> setCostoUnitario(13);
$lincompra2 -> setFueEntregado('si');

$pedido = new PedidoCompra();
$pedido -> setFecha(14);
$pedido -> setProveedor($prov);
$pedido -> setFechaEstimada(15);
$pedido -> setCostoTotal(16);
$pedido -> setPedidoCerrado(17);
$pedido -> setLineaCompra($lincompra1);
$pedido -> setLineaCompra($lincompra2);

$pedido ->mostrarInformacion();