<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea - Procesador de transacciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" id="tittle">
  Tarea - Procesador de transacciones
  <span>  By Cristopher Figueroa | Matricula: 2018-6186</span>
  </a>
</nav>
</header>

<div class="container">
    <div class="row">

        <table class="table table-hover">
	        <thead class="thead-dark">
             <th>Id</th>
             <th>Fecha - Hora</th>
             <th>Monto</th>
             <th>Descripción</th>
             <th></th>
            </thead>
            <tbody>
             <tr>
			    <td><?php echo $_COOKIE["Name"];?></td>
			    <td><?php echo $_COOKIE["Apellido"];?></td>
			    <td><?php echo $_COOKIE["Status"];?></td>
			    <td><?php echo $_COOKIE["Carrera"];?></td>
                <td>
                 <a href="Delete.php?id=<?php echo $key;?>" class="btn btn-danger btn-lg">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                    </svg>
                 </a>
                 <a href="Edit.php?id=<?php echo $key;?>" class="btn btn-warning btn-lg">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                 </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
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