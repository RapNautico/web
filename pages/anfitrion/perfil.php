<?php session_start();
if (empty($_SESSION['id'])) {
   //  echo "esta entrando xd";
   header("location: ../anfitrion/perfil.php");
    exit();
   // echo "malparido estas mal de la cabeza";
}
?>
<?php include('/xampp/htdocs/RentaWeb/database/db.php'); ?>
<?php include_once("/xampp/htdocs/RentaWeb/static/layouts/header_anfi.php") ?>
<body>
    <link rel="stylesheet" href="../../static/css/styles.css">
    <header class="contenedor2 header2">
        <div class="contenedor2">
            <img src="../../images/defaul.jpg" alt="" class="iconperfil">
        </div>
    </header>
    <div class="User">
        <div class="card card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Nombre completo</td>
                            <td>Ciudad</td>
                            <td>Reseña</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $query= "SELECT * FROM apartment";
                        $result_perfil= mysqli_query($conn,$query);
                       /* if(mysqli_num_rows($result_perfil)>0){
                            return 1;
                        }
                        else{
                            return 1;
                        }*/

                        while($row = mysqli_fetch_assoc($result_perfil)){ ?>
                            <tr>
                                <th><?php echo $row['namepro']?></th>
                                <th><?php echo $row['city']?></th>
                                <th><?php echo $row['reseña']?></th>
                            </tr>
                      <?php  } ?>
                    </tbody>
                </table>
        </div>
    </div>
</body>
<?php include_once("/xampp/htdocs/RentaWeb/static/layouts/footer.php") ?>