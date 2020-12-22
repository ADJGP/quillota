
<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
#$con = mysqli_connect("localhost","root","","quillota");
$con = mysqli_connect("localhost","tarjhgww_root","metasoft123.","tarjhgww_quillota");

//Limite de registros para paginacion
define('NUM_ITEMS_BY_PAGE', 42);

/* cambiar el conjunto de caracteres a utf8 */
if (!$con->set_charset("utf8")) {
  printf("Error cargando el conjunto de caracteres utf8: %s\n", $con->error);
  exit();
} else {
  #printf("Conjunto de caracteres actual: %s\n", $con->character_set_name());
}

//Chequear conexion
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>