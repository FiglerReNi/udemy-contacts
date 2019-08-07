<?php
include('conn.php');
$id = $_GET['id'];
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $query = "UPDATE contacts SET nev='$name', email='$email', phone='$phone' WHERE id = '$id'";
    if(mysqli_query($conn, $query)){
        header("location: udemy2.php");
    }else{
        echo 'Error';
    }
}
    ?>
