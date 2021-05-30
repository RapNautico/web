<?php 
include('/xampp/htdocs/RentaWeb/database/db.php');

    if (isset($_POST['save_apart'])) {
        $city=$_POST['cityapartment'];
        $country=$_POST['countryapartment'];
        $direction=$_POST['dirapartment'];
        $room=$_POST['numapartment'];
        $maps=$_POST['mapsapartment'];
        $pictures=$_POST['imgapartment'];
        $picture=$_POST['imgdapartment'];
        $precio=$_POST['valapartment'];
        $reseña=$_POST['reseña'];
        $namepro=$_POST['nomapartment'];

        $query= "INSERT INTO apartment (city,country,direction,room,link,pictures,picture,precio,reseña,namepro) VALUES ('$city','$country','$direction','$room','$maps','$pictures','$picture','$precio','$reseña','$namepro')";
        $result= mysqli_query($conn,$query);
        if (!$result) {
            die("Query failed");
        }
       /* echo $city;
        echo $country;
        echo $direction;
        echo $room;
        echo $maps;
        echo $pictures;
        echo $picture;
        echo $precio;
        echo $reseña;
        echo $namepro;*/
       header("location: ../../anfitrion/mis_apart.php");

        $_SESSION['message'] = 'Se a ingresado correctamente los datos';
        $_SESSION['message_type']= 'dark';
    }

?>