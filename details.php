<?php
include "conn.php";
$id = $_GET['id'];
$query = "SELECT id, nev, phone, email FROM contacts WHERE id = '$id'";
$run = mysqli_query($conn, $query);
$contact = mysqli_fetch_object($run);
//print_r($contact);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Details</title>
</head>
<body>
<h2>Contact Detail</h2>
<hr>
<a href="udemy2.php"><button>Back</button></a>
<fieldset>
    <legend>Contact</legend>
    <table border="1" cellpadding="5" cellspacing="5" width="50%" height="200px">
        <tr>
            <th>#ID</th>
            <td> <?= $contact-> id; ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td> <?= $contact-> nev; ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td> <?= $contact-> phone; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td> <?= $contact-> email; ?></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><a href="delete.php?id=<?= $contact -> id; ?>" onclick="return(confirm('Are you sure you want to delete?'))"><button>Delete</button></a></td>
        </tr>
    </table>
</fieldset>
</body>
</html>
