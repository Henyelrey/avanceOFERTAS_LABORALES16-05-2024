<?php
include("../includes/header.php");
include("../includes/conectar.php");
$conex = conectar();
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Acceso al sistema</h1>

        <!--inicio de formulari de Acceso-->
        <form method="POST" action="login.php">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txt_user">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="txt_password">
                </div>
            </div>

            <?php
                if(isset($_REQUEST['error_ingreso'])){
            ?>

            <div class="alert alert-info" role="alert">
                Error, datos no reconocidos!
            </div>
            <?php
                }
            ?>



            <button type="submit" class="btn btn-danger">Ingresar</button>
        </form>


        <!--fin del fomulario de acceso-->




    </div>
</main>
<?php
include("../includes/footer.php")
?>