<?php
include_once 'commit_empleados.php';
include_once 'commit_categoria.php';
include_once 'commit_producto.php';
include_once 'commit_cliente.php';
include_once 'commit_activacionProd.php';
include_once 'commit_logs.php';
include_once 'commit_relacionProdCliente.php';
include_once 'commit_relacionProdCat.php';
include_once 'commit_relacionActivacionProd.php';

empleadoscommit();
categoriacommit();
productocommit();
clientecommit();
activacionProdcommit();
registroscommit();
relacionProdClientecommit();
relacionProdCatcommit();
relacionActivacionProdcommit();
insertvalues1();
insertvalues2();
insertvalues3();
insertvalues4();
?>