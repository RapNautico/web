<?php 
include('/xampp/htdocs/RentaWeb/database/db.php');
    if (isset($_POST['save_register'])) {
        $emailsing=$_POST['email'];
        $passwordsing=$_POST['password'];
        $namesing=$_POST['name'];
        $countrysing=$_POST['country'];
        $citysing=$_POST['city'];      
        $rolsing=$_POST['rol'];

        $query= "INSERT INTO userregister (email,password,name,country,city,rol) VALUES ('$emailsing', '$passwordsing','$namesing', '$countrysing', '$citysing', '$rolsing')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query fail");
            header("location: ../validation/resgister_validate.php ");
        }
        header("location: ../../user_login.php");
      /*  echo $namesing;
        echo $countrysing;
        echo $citysing;
        echo $emailsing;
        echo $rolsing;
        EDITAR EL PERFIL DESDE EL PERFIL*/
        $_SESSION['message'] = 'Se ha registrado exitosamente, ya puedes ingresar';
        $_SESSION['message_type'] = 'dark';
    }
?>