// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
// Datos para el correo
$destinatario = "bigpyx@gmail.com";
$asunto = "Contacto desde nuestra web";
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";
echo $nombre;
// Enviando Mensaje
mail($destinatario, $asunto, $carta);
 
//echo('<script language="JavaScript>alert("Tu información se envio con exito");</script>');
?>