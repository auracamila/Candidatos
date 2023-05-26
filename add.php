<?php
include('../config/config.php');
include('Candidatos.php');

if (isset($_POST) && !empty($_POST)){
    $Candidatos = new Candidato();

    if ($_FILES['hojadevida']['name'] !== ''){
        $_POST['hojadevida'] = saveImage($_FILES);
    }

    $save = $Candidatos->save($_POST);
    if ($save){
        $error = '<div class="alert alert-success" role="alert">Te has registrado con éxito</div>';    
    }else{
        $error = '<div class="alert alert-danger" role="alert">Error al registrarte</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Candidato</title>
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
        <h2 class="text-center mb-5">Regístrate</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="nombreapellido" id="nombreapellido" placeholder="Nombre completo" required class="form-control" />
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <input type="number" name="numero" id="numero" placeholder="Número Celular" required class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <input type="email" name="correo" id="correo" placeholder="Correo" required class="form-control" />
                </div>
            </div>
            <div class="row mb-2">
            <div class="col">
                <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" required class="form-control" />
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="datetime-local" name="fecha" id="fecha" placeholder="Fecha y hora" required class="form-control" />
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="text" name="linkedin" id="linkedin" placeholder="LinkedIn" required class="form-control" />
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="file" name="hojadevida" id="hojadevida" required class="form-control" />
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <input type="text" name="ingles" id="ingles" placeholder="Nivel de Inglés" required class="form-control" />
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <textarea name="comentarios" id="comentarios" placeholder="Comentarios" required class="form-control"></textarea>
            </div>
        </div>

        <button class="btn btn-success">Enviar</button>
    </form>
</div>
