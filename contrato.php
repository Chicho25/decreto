<?php $mensaje =""; ?>
<?php if (isset($_POST['save'])) {
      session_start();

      include('config.php');
      include('defs.php');

      $array_insert = array("name_employee" => $_SESSION['datos_empleado']['nombre'],
                            "last_name" => $_SESSION['datos_empleado']['apellido'],
                            "cedula" => $_SESSION['datos_empleado']['cedula'],
                            "stat" => 1);

      $insetr = InsertRec("digital_signature", $array_insert);

      if ($insetr != 0) {

        $mensaje = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Registro Realizado!</strong> usted acepto el decreto.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
      }

} ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if($insetr != 0){ ?>
    <meta http-equiv="Refresh" content="3;url=index.php">
    <?php } ?>
    <title>Gruas SHL | Decreto  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form action="" method="post">
        <?php echo $mensaje; ?>
        <h2>Confirmar el Decreto</h2>
        <div class="form-group">
          <label for="formGroupExampleInput">PDF</label>
          <a href="Decreto-Ejecutivo-No.-71-de-13-de-marzo-de-2020-Mitradel.pdf">Presione aqui para visualizar el Decreto</a>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Confirmar que esta deacuerdo, al confirmar el decreto su firma se utilizara para ser anexada a este documento y presentarlo a las autoridades competentes</label>
          <input id="check" type="checkbox" value="" class="form-control" style="width:40px;" >
        </div>
        <div class="form-group">
          <input id="boton" disabled type="submit" name="save" value="Confirmar" class="btn btn-primary">
        </div>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
