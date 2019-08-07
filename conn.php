<?php
@$conn = mysqli_connect('localhost', 'root', '', 'contacts'); //@ beépített hibaüzenet figyelmen kívül hagyása
if(!$conn)
{
    die('Faild to connect.');
}
ini_set('default_charset', 'utf-8');
mysqli_query($conn, "SET NAMES utf8");