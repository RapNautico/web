<?php include('/xampp/htdocs/RentaWeb/static/layouts/header.php');?>
<body>
    <header class="cotenedor header">
    <link rel="stylesheet" href="../static/css/styles.css">
    <div class="contenedor">
    <?php if (isset($_SESSION['message'])) {?>
            <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); }?>
    <div class="mb-5">INGRESA TUS DATOS</div>
    <form onsubmit="return ValidateRegistro()" method="POST" action="../pages/modificaciones/modifiRegister/save_registro.php">
        <div class="mb-3">
            <label for="exampleNomb" class="form-label">Nombre completo</label>
            <input type="name" class="form-control" id="namesing" name="name" required>
        </div>
        <div class="mb-3">
            <label for="examplePais" class="form-label">Pais</label>
            <input type="text" class="form-control" id="countrysing" name="country" required>
        </div>
        <div class="mb-3">
            <label for="exampleCity" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="citysing" name="city" required>
        </div>
        <div class="mb-3">
            <label for="exampleMail" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" id="emailsing" name="email" required>
        </div>
        <div class="mb-3">
            <label for="exampleNomb" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="passwordsing" name="password" required>
        </div>
        <div class="mb-3">
            <label for="exampleNomb" class="form-label">Rol</label>
            <select class="form-control" name="rol" id="rolsing">
            <option value="null" selected disabled>Seleccione un Rol</option>
            <option value="Anfitrion">Anfitrion</option>
            <option value="Invitado">Invitado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="save_register">Enviar</button>
        <form>
        <input type="submit" class="btn btn-primary" name="login" value="Iniciar sesion" onclick="location='user_login.php'">
        </form>
    </form>
</div>
    </header>
</body>
<?php include_once("/xampp/htdocs/RentaWeb/static/layouts/footer.php") ?>