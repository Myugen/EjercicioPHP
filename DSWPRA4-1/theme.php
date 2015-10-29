<?php 
//************************************
require 'style/css_cookie.php';
?>
<?php 
//************************************ // subir el fichero germen estilos
if(isset($_GET["choice"])) {
	$choice = $_GET["choice"];
	if($styleCheese != $choice) {
		$styleCheese = $choice;
		setcookie("sitestyle", $styleCheese, time() + (60*60*24*30));
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/<?php echo $styleCheese;?>/style.css" rel="stylesheet" type="text/css" />
<title>CAMBIAMOS EL TEMA USANDO LAS COOKIES DE SESION</title>
</head>
<body>
<div id="mainContainer">
  <div id="menuContainer">
     <a href="index.php">Inicio</a> &nbsp; &middot; &nbsp; <a href="contact.php">Contacto</a> &nbsp; &middot; &nbsp; <a href="theme.php">Temas</a> 
  </div>
  <div  id="bodyContainer">
    <h3>POR FAVOR ELIGE UN TEMA DE LOS QUE HAY EN LA PARTE INFERIOR. GRAAACIAS</h3>
    <p><a href="theme.php?choice=insecto">insecto  (default)</a><br/>
      <br />
    <a href="theme.php?choice=pajarraco">pajarraco </a><br/>
	  <br />
	<a href="theme.php?choice=paisaje">paisaje </a></p>
    <p>Los químicos tratando de aclarar el fenómeno de la fotosíntesis, buscando nuevos fármacos y produciendo pesticidas y fertilizantes, y los especialistas en Ecología quienes desarrollan técnicas para apagar incendios no naturales no provocados por pirómanos, </p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam  nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat   volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation  ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.  FINIQUITO.</p>
    <h3>TODOS LOS DERECHOS RESERVAOS...'CHANCLETAS S.A.'</h3>
  </div>
</div>
</body>
</html>