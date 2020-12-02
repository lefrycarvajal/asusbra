   <?php
include_once("header.php")
?> 
      <nav class="menu">
         <div class="logo">
            <a href="#"><img class="logo" src="img/logo.png" alt="logo"></a>
         </div>
         <div></div>
         <a class="icono" href="#"> <i class="fa fa-bars"></i> </a>
         <div class="menu_links">
            <ul>
               <li><a class="activado" href="#">INICIO</a></li>
               <li><a href="productos.php">PRODUCTOS</a></li>
               <li><a href="innovaciones.php">INOVACION</a></li>
               <li><a href="donde_comprar.php">DONDE COMPRAR</a></li>
               <li><a href="sobre_nosotros.php">SOBRE NOSOTROS</a></li>
            </ul>
         </div>
      </nav>
<div class="container">
   <!--menu_fin-->
   <div class="header-image">
      <h1>DONDE COMPRAR</h1>
   </div>
   <h3> TIENDAS DONDE COMPRAR </h3>
   <table width="70%" border="1">
      <tbody>
         <tr>
            <td>
               <a href="https://www.amazon.com/s?k=asus&__mk_es_US=%C3%85M%C3%85%C5%BD%C3%95%C3%91&ref=nb_sb_noss" target="_blank"><img   src="img/amazon.png" width="250px" height="250px" alt=""></a>
            </td>
            <td>
               <a href="https://www.bestbuy.com/site/searchpage.jsp?st=asus&_dyncharset=UTF-8&_dynSessConf=&id=pcat17071&type=page&sc=Global&cp=1&nrp=&sp=&qp=&list=n&af=true&iht=y&usc=All+Categories&ks=960&keys=keys" target="_blank"> <img  src="img/Best_Buy.png" width="250" height="250" alt=""/></a>
            </td>
            <td>
               <a href="https://www.newegg.com/p/pl?d=asus" target="_blank">  <img  src="img/newegg.png" width="250" height="250" alt=""/></a>
            </td>
         </tr>
      </tbody>
   </table>

   <div class="container">
<form class="form-signin" method="POST">
 
  <h1 class="h3 mb-3 font-weight-normal">Contactanos</h1>
  <label for="inputEmail" class="sr-only">Nombre</label>
  <input type="text" id="inputText" class="form-control" placeholder="Nombre" name="nombre" required="" autofocus="">
  <label for="inputEmail" class="sr-only">Telefono</label>
  <input type="phone" id="inputPhone" class="form-control" placeholder="Telefono" name="telefono" required="" autofocus="">
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="correo" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="contrasena" required="">
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-lg btn-primary btn-block" name="enviar" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">©️ 2017-2020</p>
</form>
</div>

</div>

<?php
include_once("contacto_asus.php")
?>

	      <?php
include_once("footer.php")
?> 
	  