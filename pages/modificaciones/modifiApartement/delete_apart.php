<?php

    include('/xampp/htdocs/RentaWeb/database/db.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query = "DELETE FROM apartment WHERE id = $id";
        $result = mysqli_query($conn,$query);
            if (!$result) {
                die ("Query failed");
            }
            $_SESSION['message'] ='Apartamento eliminado exitosamente';
            $_SESSION['message_type']='danger';
            header("location: ../../anfitrion/mis_apart.php");
    }

?>