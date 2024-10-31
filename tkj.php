<?php
$module = isset($_GET['m']) ? $_GET['m'] : 'home';
switch ($module) {
    case 'home':
    default:
        include('home.php');
        break;

    case 'supplier':
        include('supplier/index.php');
        break;
    case 'penjualan':
        include('penjualan/index.php');
        break;
}
