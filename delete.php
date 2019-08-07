<?php
include "conn.php";
$id = $_GET['id'];
$query = "DELETE FROM contacts WHERE id = '$id' ";
if(mysqli_query($conn, $query)){
    header("location: udemy2.php");
}else{
    echo 'Error';
}
