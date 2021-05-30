<?php include_once("/xampp/htdocs/RentaWeb/static/layouts/header.php") ?>
<?php include('../database/db.php');?>
<?php session_start(); ?>
<body >
    <header class="contenedor1 header1">
        <link rel="stylesheet" href="../static/css/styles.css">
        <div class="conten1">
        
            <div class="mb-5">
            <?php if(isset($_SESSION['message'])) {?>
            <div class="alert alert-<?$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset(); }?>
                <h1>INGRESAR</h1>
            </div>
            <form onsubmit="return validateLogin()" method="POST" action="../pages/modificaciones/validation/login_validate.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="emailsing" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="passwordsing" required>
            </div>
        <button type="submit" class="btn btn-primary" name="Iniciar">Enviar</button>
            <form action="">
            <input type="submit" class="btn btn-primary" name="login1" value="Registrarse" onclick="location='user_register.php'">
            </form>
            </form>
        </div>
    </header>
</body>
<?php include_once("/xampp/htdocs/RentaWeb/static/layouts/footer.php") ?>