<?php
include('../config/config.php');
include('Candidatos.php');
$p = new Candidato();
$data =mysqli_fetch_object($p->getOne($_GET['id']));
$date = new DateTime($data->fecha);

if (isset($_POST) && !empty($_POST)){
    $_POST['hojadevida'] = $data->hojadevida;
    if ($_FILES['hojadevida']['name'] !== ''){
        $_POST['hojadevida'] = saveImage ($_FILES);
    }
    $update = $p->update($_POST);
    if ($update){
        $error = '<div class="alert alert-success" role="alert">Candidato modificado correctamente</div>';
    }else{
        $error = '<div class="alert alert-danger" role="alert" > Error al modificar un candidato</div>';
    }
}
?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Modificar Candidato</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
    <img id="logo" src="img/logo.jpeg" alt="Logo de la empresa" title="JAD SOLUTIONS IT">
</head>

<body>
    <div class="container">
    <nav class="navbar navbar-expand navbar-dark bg-dark mb-5" style="background-color: #000;">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= ROOT ?>/CANDIDATOS/index.php" style="color: #fff; text-decoration: none;">Ver candidatos</a>
        </li>
    </ul>
</nav>
        <?php
        if (isset($error)){
            echo $error;
        }
        ?>
        <h2 class="text-center mb-5"> Modificar Candidato </h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                <input type="text" name="nombreapellido" id="nombreapellido" placeholder="nombreapellido" require class="form-control" value="<?= $data->nombreapellido ?>" /> 
                <input type="hidden" name="id" id="id" value="<?= $data->id ?>" />
    </div>
    <div class="col">
        <input type="number" name="numero" id="numero" placeholder="numero" require class="form-control" value="<?= $data->numero ?>" /> 
    </div>
</div>

    <div class="row mb-2">
        <div class="col">
         <input type="text" name="correo" id="correo" placeholder="correo" require class="form-control" value="<?= $data->correo ?>" /> 
    <div>
    <div class="col">
    <input type="text" name="ciudad" id="ciudad" placeholder="ciudad" require class="form-control" value="<?= $data->ciudad ?>" /> 
    </div>
    </div>
    <div class="row mb-2">
        <div class="col">
         <input type="number" name="fecha" id="fecha" placeholder="fecha" require class="form-control" value="<?= $data->fecha ?>" /> 
         </div>
         <div class="col">
         <input type="text" name="linkedin" id="linkedin" placeholder="linkedin" require class="form-control" value="<?= $data->linkedin ?>" /> 
         </div>
         </div>
         <div class="row mb-2">
        <div class="col">
         <input type="file" name="hojadevida" id="hojadevida" require class="form-control" /> 
         </div>
         <div class="col">
         <input type="text" name="ingles" id="ingles" placeholder="ingles" require class="form-control" value="<?= $data->ingles ?>" /> 
         </div>
         </div>
         <div class="row mb-2">
        <div class="col">
         <input type="text" name="comentarios" id="comentarios" placeholder="comentarios" require class="form-control" value="<?= $data->comentarios ?>" /> 
         </div>

         <button class="btn btn-success"> Modicar </button>
        </form>
        </div>
    </body>  
    
</html>