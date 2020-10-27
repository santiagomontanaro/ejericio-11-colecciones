<?php

require_once 'accion/lineaCompra.php';
require_once 'accion/pedidoCompra.php';
require_once 'accion/producto.php';
require_once 'accion/proveedor.php';

$prov = new Proveedor();
$prov -> setId(1);
$prov -> setDescripcion('Martín Díaz');

$prod1 = new Producto();
$prod1 -> setCodigo('#0544');
$prod1 -> setDescripcion('Botella Coca-Cola 1/2 lt.');
$prod1 -> setPrecioVenta('$1485');

$prod2 = new Producto();
$prod2 -> setCodigo('#0545');
$prod2 -> setDescripcion('Lata Coca-Cola 500ml.');
$prod2 -> setPrecioVenta('$825');

$lincompra1 = new LineaCompra();
$lincompra1 -> setProducto($prod1);
$lincompra1 -> setCantidad('15');
$lincompra1 -> setCostoUnitario('$99.00');
$lincompra1 -> setFueEntregado('si');

$lincompra2 = new LineaCompra();
$lincompra2 -> setProducto($prod2);
$lincompra2 -> setCantidad('15');
$lincompra2 -> setCostoUnitario('$55.00');
$lincompra2 -> setFueEntregado('si');

$pedido = new PedidoCompra();
$pedido -> setFecha('30/10/20');
$pedido -> setProveedor($prov);
$pedido -> setFechaEstimada('05/11/20');
$pedido -> setCostoTotal('$2.310,00');
$pedido -> setPedidoCerrado('Si');
$pedido -> setLineaCompra($lincompra1);
$pedido -> setLineaCompra($lincompra2);

$pedido ->mostrarInformacion();