<?php
include('conn.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    //echo $name . ' ' . $email . ' ' . $phone;
    $query = "INSERT INTO contacts.contacts (nev, email, phone)
                VALUES ('$name', '$email', '$phone')";
    if(mysqli_query($conn, $query)){
        echo '<strong style="color: green">Contact has been added</strong>';
    }
}
$query1 = "SELECT * FROM contacts.contacts";
$run = mysqli_query($conn, $query1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
</head>
<body>
<h1>Contacts</h1>
<hr>
<fieldset>
    <legend>Contacts</legend>
    <form method="post" action="udemy2.php">
    <table width="30%">
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name" required</td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="email" name="email" required</td>
        </tr>
        <tr>
            <td>Phone: </td>
            <td><input type="text" name="phone" required</td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            <button type="submit" name="submit"> Create Contact</button>
            </td>
        </tr>
    </table>
    </form>
</fieldset>
<h1>Contacts List</h1>
<hr>

<?php
if($run -> num_rows == 0){
    echo "<strong style='color:orange'> No data found </strong>";
}
else{
?>
<fieldset>
    <legend>Contact List</legend>
<table border="1" width="50%" cellpadding="5" cellspacing="5">
    <tr>
        <th>#ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    <?php while($contact = mysqli_fetch_object($run)): /*php echo helyet =*/ ?>
    <tr>
        <td> <?php echo $contact -> id; ?></td>
        <td><?= $contact -> nev; ?></td>
        <td><?= $contact -> email; ?></td>
        <td><?= $contact -> phone; ?></td>
        <td>
            <a href="delete.php?id=<?= $contact -> id; ?>" onclick="return(confirm('Are you sure you want to delete?'))"><button>Delete</button></a>
            <a href="details.php?id=<?= $contact -> id; ?>"><button>Details</button></a>
            <a href="edit.php?id=<?= $contact -> id; ?>"><button>Update</button></a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</fieldset>
<?php
}
?>
</body>
</html>

