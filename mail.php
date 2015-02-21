<?php
// El mensaje
$mensaje = $_POST["body"];

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

// Enviarlo
mail('hhkaos@gmail.com', $_POST["subject"], $mensaje);
?>