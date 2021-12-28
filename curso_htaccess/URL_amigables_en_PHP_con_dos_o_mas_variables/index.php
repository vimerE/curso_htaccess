<!--https://www.youtube.com/watch?v=aa3EdHE4PrA&list=PLH_tVOsiVGzkGD2sB-cmSkxKzvoMYZrHL&index=7-->
<?php
  include("core/config.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="<?php echo SERVER_URL; ?>css/mystyle.css">
    <title>Inicio</title>
  </head>
  <body>
    <ul>
      <li><a href="<?php echo SERVER_URL; ?>inicio/Vimer/24/">Inicio</a></li>
      <li><a href="<?php echo SERVER_URL; ?>pagina1/Brenda/23/">Página 1</a></li>
      <li><a href="<?php echo SERVER_URL; ?>pagina2/">Página 2</a></li>
      <li><a href="<?php echo SERVER_URL; ?>pagina3/">Página 3</a></li>
    </ul>

    <?php
      if(isset($_GET["view"])){
        $views = explode("/",$_GET["view"]);
        if(is_file("pages/".$views[0].".php")){
          include("pages/".$views[0].".php");
        }else{
          include("pages/inicio.php");
        }
      }else{
        include("pages/inicio.php");
      }
    ?>
  </body>
</html>
