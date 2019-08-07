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
    <title>Edit</title>
</head>
<body>
<h1>Edit</h1>
<hr>
<fieldset>
    <legend>Contacts</legend>
    <form method="post" action="update.php?id=<?= $contact -> id; ?>">
        <table width="30%">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" value="<?= $contact -> nev;?>" required</td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email" value="<?= $contact -> email;?>" required</td>
            </tr>
            <tr>
                <td>Phone: </td>
                <td><input type="text" name="phone" value="<?= $contact -> phone;?>" required</td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                    <button type="submit" name="submit"> Update Contact</button>
                </td>
            </tr>
        </table>
    </form>
</fieldset>
</body>
</html>