<?php 

    include('/xampp/htdocs/RentaWeb/database/db.php');

    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $query = "SELECT * FROM apartment WHERE id = $id";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $city = $row['city'];
            $country=$row['country'];
            $direction=$row['direction'];
            $room=$row['room'];
            $link=$row['link'];
            $pictures=$row['pictures'];
            $picture=$row['picture'];
            $precio=$row['precio'];
            $reseña=$row['reseña'];
            $namepro=$row['namepro'];
        }
    }
    if (isset($_POST['Actualizar'])) {
        $id=$_GET['id'];
        $city = $_POST['city'];
        $country=$_POST['country'];
        $direction=$_POST['direction'];
        $room=$_POST['room'];
        $link=$_POST['link'];
        $pictures=$_POST['pictures'];
        $picture=$_POST['picture'];
        $precio=$_POST['precio'];
        $reseña=$_POST['reseña'];
        $namepro=$_POST['namepro'];
        $query= "UPDATE apartment set city='$city', country='$country', direction='$direction', room='$room', link='$link', pictures='$pictures', picture='$picture', precio='$precio', reseña='$reseña', namepro='$namepro' WHERE id= $id";
        mysqli_query($conn,$query);
        $_SESSION['message']='Los datos se han actualizado correctamente';
        $_SESSION['message_type']='succes';
        header("location: ../../anfitrion/mis_apart.php");
    }
?>
<?php include('/xampp/htdocs/RentaWeb/static/layouts/header_anfi.php'); ?>
<body>
    <link rel="stylesheet" href="../../../static/css/styles.css">
    <header>
    <div class="container p-4">
    <div class="row">
        <div class="col-md-20 mx-auto" >
            <div class="card card-body">
                <h1 style="text-align: center;">Actualizar informacion</h1>
                <form  action="update_apart.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="city" value="<?php echo $city;?>" class="form-control" placeholder="update city">
                    </div>
                    <div class="form-group">
                        <input type="text" name="country" value="<?php echo $country;?>" class="form-control" placeholder="update country">
                    </div>
                    <div class="form-group">
                        <input type="text" name="direction" value="<?php echo $direction;?>" class="form-control" placeholder="update direction">
                    </div>
                    <div class="form-group">
                        <input type="text" name="room" value="<?php echo $room;?>" class="form-control" placeholder="update room">
                    </div>
                    <div class="form-group">
                        <input type="text" name="link" value="<?php echo $link;?>" class="form-control" placeholder="update link">
                    </div>
                    <div class="form-group">
                        <input type="file" name="pictures" value="<?php echo $pictures;?>" class="form-control" placeholder="update pictures">
                    </div>
                    <div class="form-group">
                        <input type="file" name="picture" value="<?php echo $picture;?>" class="form-control" placeholder="update picture">
                    </div>
                    <div class="form-group">
                        <input type="text" name="precio" value="<?php echo $precio;?>" class="form-control" placeholder="update precio">
                    </div>
                    <div class="form-group">
                       <textarea name="reseña"  rows="3"><?php echo $reseña;?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="namepro" value="<?php echo $namepro;?>" class="form-control" placeholder="update name">
                    </div>
                    <button class="btn btn-success" name="Actualizar">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
    </header>
</body>
<?php include('/xampp/htdocs/RentaWeb/static/layouts/footer.php'); ?>