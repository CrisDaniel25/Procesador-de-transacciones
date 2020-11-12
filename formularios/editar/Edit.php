<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea - Procesador de transacciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/Style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" id="tittle">
  Tarea - Procesador de transacciones
  <span>  By Cristopher Figueroa | Matricula: 2018-6186</span>
  </a>
  
  <a class="btn btn-danger btn-lg btn-back" href="../../Index.php">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
    </svg> 
  </a>
</nav>
</header>

<div class="container">
<form action="../../metodos/editar/Update.php" method="post">
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text bg-white">
        <i class="fas fa-user-circle"></i>
      </div>
    </div>
    <input class="form-control" placeholder="Monto" name="monto" type="number" value="<?php echo $editData['nombre'];?>">
  </div>
</div>

<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text bg-white">
        <i class="fas fa-university"></i>
      </div>
    </div>
    <input class="form-control" placeholder="Descripción" name="descripcion" type="text" value="<?php echo $editData['nombre'];?>">
  </div>
</div>
<div class="row">
<div class="col-sm">
<button type="submit" name="create" value="Create" class="btn btn-success btn-lg btn-block">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
  </svg>
</button>
</div>
<div class="col-sm">
<button type="reset" value="Clear" class="btn btn-danger btn-lg btn-block">
 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
 </svg>
</button>
</form>
</div>
</div>
</form>
</div>

<footer class="page-footer font-small special-color-dark pt-4"> 
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <p>En este sistema en la pantalla inicial tendré un listado(Tabla) con todas las transacciones guardada en
         el sistema, estas transacciones pueden ser mantenida osea que se pueden editar,eliminar y agregar.</p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-3">
        <p>Las transacciones se pueden agregar de dos maneras distintas una con un típico formulario html y la 
        otra seleccionado un fichero para realizar una subida masiva de información al sistema, los ficheros 
        aceptados solo sera json o csv. </p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-3">
        <p>Por otra parte las transacciones pueden ser descargada del sistema en un fichero json o csv, este 
        fichero se generara con todos las transacciones que tenga el sistema en ese momento. Para realizar la 
        descargar esto le puedes ayudar (https://www.tutorialrepublic.com/php-tutorial/php-file-download.php).</p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-3">
        <p>Al realizar algunas de las funcionalidades descripta anteriormente se debe guardar un log indicando la
         acción que se realizo (Edito,Borro o agrego), la fecha y hora que se realizo la acción y el id de la 
         transacción sobre la que se realizo dicha acción.</p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-3">
      <p>Datos de la transacción:</p>
        <ul>
            <li>Id</li>
            <li>Fecha y hora</li>
            <li>Monto</li>
            <li>Descripción (Porque realizo esta transacción)</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2020 Copyright by
    <a href="https://github.com/CrisDaniel25"> Cristopher Figueroa</a>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
</body>
</html>