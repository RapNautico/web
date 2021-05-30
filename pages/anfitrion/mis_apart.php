<?php session_start(); ?>
<?php include('/xampp/htdocs/RentaWeb/static/layouts/header_anfi.php'); ?>
<?php include('/xampp/htdocs/RentaWeb/database/db.php'); ?>
<body>
    <link rel="stylesheet" href="../../static/css/styless.css">
    <header class="contanedor3 header3">
    <?php if (isset($_SESSION['message'])) {?>
            <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); }?>
        <div class="contan p-4">
            <div class="row">
               <div class="card card-body">
               <div class="col-md-20">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>Ciudad</th>
                               <th>Pais</th>
                               <th>Direccion</th>
                               <th>room</th>
                               <th>Link google maps</th>
                               <th>pictures apartment</th>
                               <th>Valor noche</th>
                               <th>Reseña apartamento</th>
                               <th>Nombre propietario</th>
                               <th>Fecha</th>
                               <th>Acciones</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $query = "SELECT * FROM apartment";
                            $result_apartment=mysqli_query($conn,$query);

                            while($row = mysqli_fetch_array($result_apartment)){ ?>
                                <tr>
                                    <td><?php echo $row['city'] ?></td>
                                    <td><?php echo $row['country'] ?></td>
                                    <td><?php echo $row['direction'] ?></td>
                                    <td><?php echo $row['room'] ?></td>
                                    <td><?php echo $row['link'] ?></td>
                                    <td><?php echo $row['pictures'] ?></td>
                                    <td><?php echo $row['precio'] ?></td>
                                    <td><?php echo $row['reseña'] ?></td>
                                    <td><?php echo $row['namepro'] ?></td>
                                    <td><?php echo $row['fecha'] ?></td>
                                    <td>
                                        <a class="btn btn-secondary" href="../modificaciones/modifiApartement/update_apart.php?id=<?php echo $row['id']; ?>">
                                            <i class="fas fa-marker"></i>
                                        </a>
                                        <a class="btn btn-danger" href="../modificaciones/modifiApartement/delete_apart.php?id=<?php echo $row['id']; ?>">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>                            
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
               </div>
            </div>
        </div>
    </header>
</body>
<?php include('/xampp/htdocs/RentaWeb/static/layouts/footer.php'); ?>