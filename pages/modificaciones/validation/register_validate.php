<?php 
include('/xampp/htdocs/RentaWeb/database/db.php');

if (isset($_POST['save_register'])) {
    $name=$_POST['name'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $rol=$_POST['rol'];

    $name=mysqli_real_escape_string($conn,$name);
    $country=mysqli_real_escape_string($conn,$country);
    $city=mysqli_real_escape_string($conn,$city);
    $email=mysqli_real_escape_string($conn,$email);
    $password=mysqli_real_escape_string($conn,$password);
    $rol=mysqli_real_escape_string($conn,$rol);

    $query=mysqli_query($conn, "SELECT * FROM userregister WHERE email='$email', password='$password', name='$name', country='$country', city='$city', rol=''$rol") or die(mysqli_errno($conn));
    $row=mysqli_fetch_array($query);

    $name=$row['namesing'];
    $counter=mysqli_num_rows($query);
    $id=$row['id'];
    if ($counter == 0) {
        header("location: ../user_register.php");

        $_SESSION['message']='Uno de los campos ya esta registrado';
        $_SESSION['message_type']='danger';
    }
    else{
       // echo "loca no estoy llegando";
        $_SESSION['id']=$id;
        $_SESSION['emailsing']=$email;

      // header("location: ../../../../user_login.php");
    }

}
?>