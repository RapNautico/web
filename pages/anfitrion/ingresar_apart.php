<?php include_once("/xampp/htdocs/RentaWeb/static/layouts/header_anfi.php")?>
<?php include('/xampp/htdocs/RentaWeb/database/db.php'); ?>
<body>
    <link rel="stylesheet" href="../../static/css/styles.css">
    <header class="contenedor3 header3">
        <div class="contan p-4">
            <div class="row">
                <div class="card card-body ">
                <form method="POST" action="../modificaciones/modifiApartement/save_apart.php">
                <div>
                    <label class="form-label">Ciudad</label>
                    <input type="text" name="cityapartment" class="form-control" autofocus>
                </div>
                <div>
                    <label class="form-label">Pais</label>
                    <input type="text" name="countryapartment" class="form-control">
                </div>
                <div>
                    <label class="form-label">Direccion</label>
                    <input type="text" name="dirapartment" class="form-control">
                </div>
                <div>
                    <label class="form-label">Numero de habitaciones</label>
                    <input type="text" name="numapartment" class="form-control" >
                </div>
                <div>
                    <label class="form-label">Link google maps</label>
                    <input type="text" name="mapsapartment" class="form-control">
                </div>
                <div>
                    <label class="form-label">Imagenes del apartamento</label>
                    <input type="file" name="imgapartment" class="form-control">
                </div>
                <div>
                    <label class="form-label">Imagen destacada</label>
                    <input type="file" name="imgdapartment" class="form-control">
                </div>
                <div>
                    <label class="form-label">Valor por noche</label>
                    <input type="text" name="valapartment" class="form-control">
                </div>
                <div>
                    <label class="form-label">Reseña del aparatamento</label>
                    <textarea name="reseña" id=""  rows="3" class="form-control" ></textarea>
                </div>
                <div>
                    <label class="form-label">Nombre del propietario</label>
                    <input type="text" name="nomapartment" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" class="save" name="save_apart">Enviar</button>
            </form>
                </div>
            </div>
        </div>
    </header>
<?php include_once("/xampp/htdocs/RentaWeb/static/layouts/footer.php")?>