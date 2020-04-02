<?php
$mensaje = "";
if (isset($_POST['save'])) {

    include('config.php');
    include('defs.php');

    $contar = RecCount("digital_signature", "cedula = '".$_POST['cedula']."'");

    if ($contar == 0) {

      session_start();

      $_SESSION['datos_empleado'] = array("nombre"=>$_POST['nombre'],
                                          "apellido"=>$_POST['apellido'],
                                          "cedula"=>$_POST['cedula']);

      header("Location: contrato.php");

    }else{

      $mensaje = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Ya esta registrado!</strong> Ya usted acepto el decreto.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';

    }

}

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gruas SHL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h2>Decreto - Gruas SHL</h2>
      <?php echo $mensaje; ?>
      <form action="" method="post">
        <div class="form-group">
          <label for="formGroupExampleInput">Nombre *</label>
          <input type="text" name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Nombre" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Apellido *</label>
          <input type="text" name="apellido" class="form-control" id="formGroupExampleInput2" placeholder="Apellido" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Cedula * <span style="color:red;">(solo el numero, sin guiones ni letras)</span></label>
          <input type="text" name="cedula" class="form-control" id="for1mGroupExampleInput2" placeholder="Coloque solo el numero de cedula" required>
        </div>
        <div class="form-group">
          <input type="submit" name="save" value="Guardar" class="btn btn-primary">
        </div>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
