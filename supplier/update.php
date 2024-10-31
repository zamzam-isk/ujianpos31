<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "UPDATE suppliers SET name='$name', address='$address', phone='$phone', email='$email' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //var_dump($sql);
        //exit;
        header('location: ?m=supplier');
    } else {
        include('index.php?m=supplier');
        echo '<script language="JavaSricpt">';
        echo 'alert ("Data gagal diupdate")';
        echo '</script>';
    }
} else {
    //echo "Eits Tidak Boleehhh... kamu  klik aja <a href='?m=supplier&s=add'>disini</a>";
    echo '<script>windows.history.back()</script>'; //JavaScript 
}
