<?php
$id = $_POST['idproducto'];
include 'System/MYSQL.php';
$mysql = new MYSQL('localhost','root','','tienda_ciclo2');
$mysql->query('DELETE FROM producto where id = '.$id);
echo 'Se eliminĂ³ el producto';
 