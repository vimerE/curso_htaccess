<h1>Esto es la página 1.</h1>
<?php
// http://localhost/curso_htaccess/URL_amigables_en_PHP_con_dos_o_mas_variables/inicio/Brenda/23/
// inicio = 0
// vimer = 1
// 24 = 2
$perfil = explode("/",$_GET["view"]);
$nombre = $perfil[1];
$edad = $perfil[2];
echo "El nombre es: ". $nombre . " y tiene: ". $edad . " años.";

?>
