<?php
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutentificado(bool $autenticado) : ?string {
    if ($autenticado) {
        return "Usuario autenticado";
    } else {
        return  null;
    }
}

$usuario = usuarioAutentificado(false);
echo $usuario;

include 'includes/footer.php';