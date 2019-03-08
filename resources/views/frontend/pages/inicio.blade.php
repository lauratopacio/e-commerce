@extends(layout.layouts)


@section('content')
{{-- este será el contenido din{amico que te mencionaba en el layout es lo del yield section --}}
 <div id="content">
 	<div class="contenedor">
 		<img src="images/principal/banner.png" id="im">
		<div class="centrado">
			 <p id="t1">Lo más</p>
			 <p id="t2">VENDIDO</p>
			 <div id="boton">
			 <button id="btn_1">COMPRA AQUÍ</button></div>
		</div>
 	</div>
 <div class="parte2">
 	 <div class="row">
      <div class="col-md-7 col-sm-7" >
	    <div class="contenedor2">
	 		<img src="images/principal/foto1.png" id="foto1">
			<div class="centrado2">
				<center>
				 <p id="t3">Arreglo</p>
				 <p id="t4">DEL MES</p>
				 <div id="boton">
				 <button id="btn_2">COMPRA AQUÍ</button>
				</div>
				</center>
			</div>
	 	</div>
	 </div>
      <div class="col-md-5 col-sm-5" >
  		<div class="contenedor2">
	 		<img src="images/principal/foto2.png" id="foto2">
			<div class="centrado3">
				<center>
				 <p id="t5">Conoce nuestros</p>
				 <p id="t6">BENEFICIOS</p>
				 <div id="boton">
				 <button id="btn_3">COMPRA AQUÍ</button>
				</div>
				</center>
			</div>
	 	</div>
    </div>
 </div>





 {{-- observación, esto lo puedes agregar en otra partial e incluirlo aquí con include y así lo puedes estar reutilizando en la página que necesites  --}}

<!--   CARRUCEL--> 
 <div class="row">
    <div class="col-md-12">
		<img src="images/principal/textos/compra por categoría.png" id="imT">
	 </div>
	
 </div>
    <div class="row">
        <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col">
                        <a href="#" >
                            <img src="images/principal/slider/1.png" alt="Image" style="max-width:100%;">
                            <center><img src="images/principal/textos/cumpleanos.png" style="width: 60%; margin-top: 3%;"></center>
                        </a>
                      </div>
                      <div class="col-md-4 col-sm-4 col">
                        <a href="#">
                            <img src="images/principal/slider/2.png" alt="Image" style="max-width:100%;">
                            <center><img src="images/principal/textos/aniversario.png" style="width: 70%; margin-top: 13%;"></center>
                        </a>
                       </div>
                      <div class="col-md-4 col-sm-4 col">
                        <a href="#">
                            <img src="images/principal/slider/3.png" alt="Image" style="max-width:100%;">
                            <center><img src="images/principal/textos/porque_no.png" style="width: 50%; margin-top: 6%;"></center>
                        </a>
                       </div>
                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                          <div class="row">
                      <div class="col-md-4 col-sm-4 col">
                        <a href="#" >
                            <img src="images/principal/slider/1.png" alt="Image" style="max-width:100%;">
                            <center><img src="images/principal/textos/cumpleanos.png" style="width: 60%; margin-top: 3%;"></center>
                        </a>
                      </div>
                      <div class="col-md-4 col-sm-4 col">
                        <a href="#">
                            <img src="images/principal/slider/2.png" alt="Image" style="max-width:100%;">
                            <center><img src="images/principal/textos/aniversario.png" style="width: 70%; margin-top: 13%;"></center>
                        </a>
                       </div>
                      <div class="col-md-4 col-sm-4 col">
                        <a href="#">
                            <img src="images/principal/slider/3.png" alt="Image" style="max-width:100%;">
                            <center><img src="images/principal/textos/porque_no.png" style="width: 50%; margin-top: 6%;"></center>
                        </a>
                       </div>
                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                          <div class="row">
                      <div class="col-md-4 col-sm-4 col">
                        <a href="#" >
                            <img src="images/principal/slider/1.png" alt="Image" style="max-width:100%;">
                            <center><img src="images/principal/textos/cumpleanos.png" style="width: 60%; margin-top: 3%;"></center>
                        </a>
                      </div>
                      <div class="col-md-4 col-sm-4 col">
                        <a href="#">
                            <img src="images/principal/slider/2.png" alt="Image" style="max-width:100%;">
                            <center><img src="images/principal/textos/aniversario.png" style="width: 70%; margin-top: 13%;"></center>
                        </a>
                       </div>
                      <div class="col-md-4 col-sm-4 col">
                        <a href="#">
                            <img src="images/principal/slider/3.png" alt="Image" style="max-width:100%;">
                            <center><img src="images/principal/textos/porque_no.png" style="width: 50%; margin-top: 6%;"></center>
                        </a>
                       </div>
                    </div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" ><img src="iconos/flecha izq.png" id="izq"></a>
                  <a data-slide="next" href="#Carousel" ><img src="iconos/flecha derecha.png" id="der"></a>
                </div><!--.Carousel-->
                 
        </div>
    </div>
    </div>

<!--   CARRUCEL--> <br> <br> 
 </div>
 <br> <br> <br>
 <div class="banner_correo">
   <div id="banner_contenedor">
      <div class="row ">
         <form action="correo_real.php" method="post" style=" width: 100%;" >
           <div class="col-lg-3 col-md-12 col-sm-12"  >
            <p id="texto_ofertas">Recibe las mejores ofertas y más </p>
           </div>
            <div class="col-lg-4 col-md-12 col-sm-12" >
               <input type="text"  id="correo" class="correo" name="correo" placeholder="  Ingresa tu correo electrónico">
           </div>
            <div class="col-lg-1 col-md-12 col-sm-12">
              <button id="btn_4" >ENVIAR</button>  
           </div>
            <div class="col-lg-1 col-md-3 col-sm-12" >
               <p id="texto_oferta">Síguenos en</p>  
           </div>
           <div class="col-lg-2 col-md-12 col-sm-12" id="iconos_ban"  >
             <div style="width: 50%; height: 50px; ">
               <img src="iconos/logo face.png" id="iconos_banner"> 
             </div>
             <div style="width: 50%; height: 50px; margin-top: -50px; margin-left:50px; padding-left-right: -100px;"> 
               <img src="iconos/logo instagram.png" id="iconos_banner"> 
             </div>
           </div>  
         </form>
          
       </div>
   </div>

 </div>


<script type="text/javascript">
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
</script>



@stop 
{{-- marca el final de lo que irá en el content --}}
