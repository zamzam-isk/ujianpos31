<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $supplier_id = $_POST['supplier_id'];
    $total = $_POST['total'];

    $sql = "UPDATE sales SET supplier_id='$supplier_id', total='$total' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=penjualan');
    } else {
        include('index.php?m=penjualan');
        echo '<script language="JavaSricpt">';
        echo 'alert ("Data gagal diupdate")';
        echo '</script>';
    }
} else {
    //echo "Eits Tidak Boleehhh... kamu  klik aja <a href='?m=penjualan&s=add'>disini</a>";
    echo '<script>windows.history.back()</script>'; //JavaScript 
}
