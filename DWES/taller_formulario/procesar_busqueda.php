<?php

if (isset($_GET["Termino_busqueda"])) {
    $termino = htmlspecialchars($_GET["Termino_busqueda"]);
} else {
    $termino = "Ningun termino introducido";
}
echo "Has buscado ".$termino;