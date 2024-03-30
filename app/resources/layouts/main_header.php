<?php
function main_header($args = []){
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREENNET</title>
    <?php
    if (isset($args['styles'])) {
        foreach ($args['styles'] as $s) {
            echo_link_style($s);
        }
    }
    ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php  ?>">
</head>
<body>
    <header>
        <div class="logo" id="logo">
            <img src="<?php  ?>" alt="Logo de mi foro" class="img-logo">
            <h1 class="nombre-logo">GreenNet</h1>
        </div>
        <div class="perfil">
            <p class="nombre-perfil"><?php  ?></p>
            <img src="<?php  ?>" alt="Foto de perfil" class="img-perfil" id="perfil_Icono">
        </div>
    </header>
<?php }?>