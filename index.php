<?php
include('../config/config.php');
include('Candidatos.php');

$p = new Candidato();
$allcandidatos = $p->getAll();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $remove = $p->remove($_GET['id']);
    if ($remove) {
        header('Location: ' . ROOT . 'Candidatos/index.php');
    } else {
        $msj = "<div class='alert-danger' role='alert'>Error al eliminar candidato.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de candidatos</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
<body>
    <div id="container">
        <img id="logo" src="img/logo.jpeg" alt="Logo de la empresa" title="JAD SOLUTIONS IT">
        <nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/CANDIDATOS/index.php">Ver candidatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>/CANDIDATOS/add.php">Registrar candidatos</a>
                </li>
            </ul>
        </nav>
        <h2 class="title">Lista candidatos</h2>
        <div class="row">
            <?php while ($candidatos = mysqli_fetch_object($allcandidatos)) { ?>
                <div class="col">
                    <div class="border border-info p-2">
                        <h5><?php echo $candidatos->nombreapellido; ?></h5>
                        <p>Numero: <?php echo $candidatos->numero; ?></p>
                        <p><b>Fecha:</b> <?php echo date("D, d-M-Y H:i", strtotime($candidatos->fecha)); ?></p>
                        <div class="center">
                            <a class="btn btn-success" href="<?= ROOT ?>/Candidatos/edit.php?id=<?php echo $candidatos->id; ?>">Modificar</a> -
                            <a class="btn btn-danger" href="<?= ROOT ?>/Candidatos/index.php?id=<?php echo $candidatos->id; ?>">Eliminar</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>