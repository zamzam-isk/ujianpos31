<?php
if (isset($_GET['id'])) {
    include_once('config.php');
    $id = $_GET['id'];


    $sql = "DELETE FROM sales WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=penjualan');
    } else {
        include('index.php?m=penjualan');
        echo '<script language="JavaSricpt">';
        echo 'alert ("Data gagal dihapus")';
        echo '</script>';
    }
} else {
    //echo "Eits Tidak Boleehhh... kamu  klik aja <a href='?m=penjualan&s=add'>disini</a>";
    echo '<script>windows.history.back()</script>'; //JavaScript 
}
