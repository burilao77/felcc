@extends('master')
    @section('content')
<script>
    $(function () {
      $("#slider").responsiveSlides({
          auto: true,
          nav: true,
          speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner">
@include('share.navbar')
 <div class="slider">
         <div class="caption">
             <div class="container">
                  <div class="callbacks_container">
                      <ul class="rslides" id="slider">
                      </ul>
                        <div class="clearfix"></div>
                  </div>
              </div>
          </div>
      </div>
      <div class="banner-grids">
          <div class="container">
             <div class="col-md-4 banner-grid">
                 </div>
                 </div>
             </div>
             <div class="col-md-4 banner-grid">
                 </form>
                 </div>
             </div>
             <div class="clearfix"></div>
          </div>
      </div>
</div>
<!---->
<div class="welcome">
     <div class="container">
         <h2>SISTEMA DE REGISTRO Y CONTROL DE DENUNCIAS</h2>
         <div class="welcm_sec">
             <div class="col-md-9 campus">
                 <div class="campus_head">
                     <h3>MISIÓN</h3>
                     <p>“La fuerza especial de lucha contra el crimen es el organismo especializado de la policía nacional, encargado de la prevención e investigación de delitos, identificación y aprehensión de los presuntos responsables, búsqueda, recolección y custodia de evidencias, el estudio, análisis técnico científico de las pruebas materiales y evacuación de dictámenes periciales; respetando los derechos humanos y en cumplimiento de las normas legales vigentes”.</p>
                 </div>
                 <div class="col-md-3 wel_grid">
                     <img src="images/w1.jpg" class="img-responsive" alt=""/>
                     <h5><a href="#">Integridad</a></h5>
                     <p>Cualidad de adoptar decisiones y desarrollar actividades, en sujeción a los valores y principios que la institución manifiesta y cada uno de sus integrantes asume. Actuar sin doblez, con firmeza, de conformidad con la ley, las normas y las obligaciones que de éstas se derivan.</p>
                 </div>
                 <div class="col-md-3 wel_grid">
                     <img src="images/w3.jpg" class="img-responsive" alt=""/>
                     <h5><a href="#">Honestidad</a></h5>
                     <p>Actitud basada en el compromiso personal, destinada en buscar y comunicar la verdad de manera oportuna, a quien corresponda.No dejarse llevar por halagos, prebendas, promesas o cualquier otro beneficio ilegítimo o ajeno al ejercicio profesional del cargo.</p>
                 </div>
                 <div class="col-md-3 wel_grid">
                     <img src="images/w2.jpg" class="img-responsive" alt=""/>
                     <h5><a href="#">Profesionalismo</a></h5>
                     <p>Cumplir la misión encomendada con calidad profesional y competencia tanto legal como técnica. Ejercer las funciones en total apego a la ley, con respeto a los ciudadanos y a la institucionalidad. Actuar con imparcialidad profesional en la búsqueda de la verdad, en cada una de sus tareas y respecto a los problemas y requerimientos de la población.</p>
                 </div>
                 <div class="col-md-3 wel_grid">
                     <img src="images/w4.jpg" class="img-responsive" alt=""/>
                     <h5><a href="#">Lealtad</a></h5>
                     <p>Ser consecuente con la ley, el Estado, la institución y los camaradas, demostrando pertenencia e identificación plena con sus metas y objetivos, respondiendo a la confianza depositada, en arreglo a las normas éticas y legales.</p>
                 </div>
                 <div class="clearfix"></div>
                 <div class="more_info">
                     </div>
             </div>
             <div class="col-md-3 testimonal">
                    <h3>VISIÓN</h3>
                    <div class="testimnl-grid">
                         <a href="#"><p>“Constituirse en un organismo que garantice el cumplimiento de la ley, desarrollo de investigaciones fiables e idóneas, con recursos humanos altamente calificados, aplicando tecnología moderna; contribuya efectivamente a la administración de justicia, y genere confianza y credibilidad de la sociedad”.</p></a>
                        </div>
                    </div>
             </div>
             <div class="clearfix"></div>
         </div>
     </div>
</div>
<!-- <div class="news">
     <div class="container">
         <h3>ULTIMAS NOTICIAS</h3>
          <div class="event-grids">
             <div class="col-md-4 event-grid">
                 <div class="date">
                     <h4>1</h4>
                     <span>03/2017</span>
                 </div>
                 <div class="event-info">
                      <h5><a href="#">COCHABAMBA ES LA CIUDAD CON MAYOR ÍNDICE DE INSEGURIDAD.</a></h5>
                        <p>Según los resultados de la encuesta realizada por el Observatorio de Seguridad Ciudadana, entre los meses de septiembre y octubre del 2011 a 2072 hogares, en las cuatro principales ciudades del país, Cochabamba  serían la ciudad de mayor inseguridad ciudadana.</p>
                 </div>
                 <div class="clearfix"></div>
             </div>
             <div class="col-md-4 event-grid">
                 <div class="date">
                     <h4>2</h4>
                     <span>03/2017</span>
                 </div>
                 <div class="event-info">
                      <h5><a href="#">CASOS DE VIOLENCIA FAMILIAR.</a></h5>
                        <p>Atendió 13.724 la directora nacional de esa fuerza de la policía boliviana, coronel norma hurtado, señaló que de acuerdo con las estadísticas la violencia intrafamiliar figura como el hecho más común que se ha registrado en el departamento, casi en un promedio de 90 por día, desde el 1 de enero hasta el 31 de mayo de 2017.</p>
                 </div>
                 <div class="clearfix"></div>
             </div>
             <div class="col-md-4 event-grid">
                 <div class="date">
                     <h4>3</h4>
                     <span>03/2017</span>
                 </div>
                 <div class="event-info">
                      <h5><a href="#">ABUSO INFANTIL.</a></h5>
                        <p>Según las estadísticas de la Fuerza Especial de Lucha Contra el Crimen (FELCC), en el periodo analizado hubo diez asesinatos, 45 homicidios, 19 tentativas de homicidio y 109 fallecimientos que aún son investigados.Sin embargo, en 2012 se produjeron 60 homicidios de menores y 13 asesinatos, que en comparación con 2013 implican una reducción del 25% y del 23%, respectivamente.
                        De 1.885 casos investigados de enero a noviembre de la gestión pasada, 379 fueron por lesiones.</p>
                 </div>
                 <div class="clearfix"></div>
             </div>
             <div class="clearfix"></div>
         </div>
     </div>
</div> -->
<!---->
<div class="footer">
     <div class="container">
         <div class="ftr-sec">
             <div class="col-md-4 ftr-grid">

             </div>
             <div class="col-md-4 ftr-grid2">

                 </ul>
             </div>
             <div class="col-md-4 ftr-grid3">

                 </ul>
             </div>
             <div class="clearfix"></div>
         </div>
     </div>
</div>
<!---->
<div class="copywrite">
     <div class="container">
         <p>VERONICA FLORES ©  UMSS 2017 </p>
     </div>
</div>
<!---->

@stop
