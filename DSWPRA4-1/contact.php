<?php 
//********************************* // Chequeamos si el estilo por defecto est� elegido y seguimos navegando
require 'style/css_cookie.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="style/
<?php echo $styleCheese;?>/style.css" rel="stylesheet" type="text/css"/>
<title>Segunda Hoja estática</title>
</head>
<body>
<div id="mainContainer">
  <div id="menuContainer">
     <a href="index.php">Inicio</a> &nbsp; &middot; &nbsp; <a href="contact.php">Contacto</a> &nbsp; &middot; &nbsp; <a href="theme.php">Temas</a> 
  </div>
  <div  id="bodyContainer">
    <h3>Podemos comprobar que la cookie original sigue en movimiento con las sesiones</h3>
    <p>DEBE ESTAR REGISTRADA EN LA COOKIES DEL NAVEGADOR, SIN DUDA  :0) ...............</p>
    <p>Así, por ejemplo, a las plantas las estudian. Los botánicos haciendo descripciones morfológicas, los físicos interesados en la fisiología.</p>
    <p> YA VAMOS TERMINANDO ESTA LOCURA DE PÁGINA.</p>
  </div>
</div>
</body>
</html>