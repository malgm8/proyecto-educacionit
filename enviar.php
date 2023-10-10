<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

mail('malgm.95@gmail.com','contacto desde mi sitio',$mensaje,)

echo '
<p>Hola '. $nombre .' su mensaje '. $mensaje .' ha sido enviado correctamente</p>

'

?>