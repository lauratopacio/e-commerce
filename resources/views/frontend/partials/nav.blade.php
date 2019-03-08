<div class="topnavs" id="myTopnav">
  <div class="row" >
   <div class="col-md-4" > 
     <div id="alineacion1">
 
 <a href="javascript:void(0);" class="nav-link" data-toggle="dropdown" id="texto" onclick="myFunction()"><img src="iconos/menu.png" id="menu"></a>            <div class="dropdown-menu">
              <center>
                <a class="dropdown-item" href="#">VISITA POR PRIMERA VEZ</a>
                <a class="dropdown-item" href="#">CONTÁCTANOS</a>
              </center>
            </div>
     </div>
   </div>
  <div class="col-md-4" ><center><img src="iconos/LOGO.png" id="logo"></center></div>
  <div class="col-md-4 ">
    <div id="alineacion">
        <img src="iconos/lupa.png" id="iconos">
        <img src="iconos/linea.png" id="linea">
        <img src="iconos/carrito.png" id="iconos">
        <img src="iconos/linea.png" id="linea">
        <img src="iconos/corazon.png" id="iconos">
        <img src="iconos/linea.png" id="linea">
        <img src="iconos/perfil.png" id="iconos">
    </div>
  </div>
  </div>
  <div class="parte2" >
     <div class="row" >
        <div class="col" > 
          <center>
            <a href="lomasvendido.php" class="nav-link"><p id="texto" >LO MÁS VENDIDO</p></a></center>
        </div>
        <div class="col" > 
           <center> <a href="" class="nav-link"><p id="texto" >ARREGLOS MENORES A $450</p></a></center>
        </div>
        <div class="col " id="texto"> <center>
            <a class="nav-link " data-toggle="dropdown" id="texto" href="#">CATEGORÍAS <img src="iconos/flecha.png" id="flechita"></a>
            <div class="dropdown-menu">
              <center>
              <a class="dropdown-item" href="cat_cumpleanos.php">CUMPLEAÑOS</a>
              <a class="dropdown-item" href="cat_aniversario.php">ANIVERSARIO</a>
              <a class="dropdown-item" href="#">COMPROMISOS Y BODAS</a>
              <a class="dropdown-item" href="#">ENAMORADOS</a>
              <a class="dropdown-item" href="#">KIDS ZONE</a>
              <a class="dropdown-item" href="#">GRACIAS</a>
              <a class="dropdown-item" href="#">LO SIENTO</a>
              <a class="dropdown-item" href="#">MATERNIDAD</a>
              <a class="dropdown-item" href="#">¿POR QUÉ NO?</a>
              <a class="dropdown-item" href="#">GRADUACIONES</a>
              <a class="dropdown-item" href="#">NACIMIENTOS</a>
              <a class="dropdown-item" href="#">MEJÓRATE</a>
              </center>
            </div>
            </center>
        </div>
        <div class="col " id="texto"> <center>
            <a class="nav-link" data-toggle="dropdown" id="texto" href="#">GLOBOS <img src="iconos/flecha.png" id="flechita"></a>
            <div class="dropdown-menu">
              <center>
              <a class="dropdown-item" href="globos_cumpleanos.php">CUMPLEAÑOS</a>
              <a class="dropdown-item" href="#">MEJÓRATE</a>
              <a class="dropdown-item" href="#">NACIMIENTOS</a>
              <a class="dropdown-item" href="#">KIDS ZONE</a>
              <a class="dropdown-item" href="#">ENAMORADOS</a>
              <a class="dropdown-item" href="#">GRADUADOS</a>
              <a class="dropdown-item" href="globos_letras_numeros.php">LETRAS Y NÚMEROS</a>
              <a class="dropdown-item" href="#">PAQUETES COMPLETOS</a>
              </center>
            </div>
            </center>
        </div>
        <div class="col" > 
          <center>
            <a href="paquetes.php"  class="nav-link"><p id="texto" >PAQUETES</p></a></center>
        </div>
        <div class="col" > 
          <center>
            <a href=""  class="nav-link"><p id="texto" >TEMPORADA</p></a></center>
        </div>
  </div>


  
  </div>
 
 

  </div>




<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnavs") {
    x.className += " responsive";
  } else {
    x.className = "topnavs";
  }
}
</script>

