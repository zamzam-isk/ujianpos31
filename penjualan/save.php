<?php
if (isset($_POST['save'])) {
    include_once('config.php');
    $supplier_id = $_POST['supplier_id'];
    $total = $_POST['total'];

    $sql = "INSERT INTO sales SET supplier_id='$supplier_id', total='$total'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=penjualan');
    } else {
        include('index.php?m=penjualan');
        echo '<script language="JavaSricpt">';
        echo 'alert ("Data gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "Eits Tidak Boleehhh... kamu  klik aja <a href='?m=penjualan&s=add'>disini</a>";
}
