<?php
session_start();
include('/xampp/htdocs/RentaWeb/database/db.php');

if (isset($_POST['Iniciar'])) {
    $email_unsafe=$_POST['emailsing'];
    $password_unsafe=$_POST['passwordsing'];

    $email = mysqli_real_escape_string($conn,$email_unsafe);
    $password = mysqli_real_escape_string($conn,$password_unsafe);

    $query= mysqli_query($conn, "SELECT * FROM userregister WHERE email='$email' and password='$password'") or die(mysqli_errno($conn));
    $row=mysqli_fetch_array($query);

    $name=$row['emailsing'];
    $counter=mysqli_num_rows($query);
    $id=$row['id'];
    if ($counter == 0) {
       // echo "usted es marica";
        header("location: ../../user_login.php"); 
       // echo "<script type='text/javascript'>alert('Invalid email or password!'); document.location='../User_login.php'</script>";
            $_SESSION['message'] = 'El email y/o la contraseña son incorrectos';
            $_SESSION['message_type'] = 'danger';
    }
    else{
       // echo "Usted es un marica y si redirecciona";
        $_SESSION['id'] = $id;
        $_SESSION['emailsing'] = $email;

        header("location: ../../anfitrion/perfil.php");
     
    }

}
?>