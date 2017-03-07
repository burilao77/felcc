@extends('master')
  @section('content')
<!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>
<!--contact-->
<div class="contact">
     <div class="container">
         <div class="main-head-section">
                    <h2>Dirección</h2>
            <div class="contact-map">
                <iframe src="https://wego.here.com/directions/mix//FELCC,-Laguna,-Ciudad-Cochabamba,-Cochabamba,-Bolivia:e-eyJuYW1lIjoiRkVMQ0MiLCJhZGRyZXNzIjoiTGFndW5hLCBDaXVkYWQgQ29jaGFiYW1iYSwgQ29jaGFiYW1iYSwgQm9saXZpYSIsImxhdGl0dWRlIjotMTcuNDAxMDUxNzEyNzY4LCJsb25naXR1ZGUiOi02Ni4xNDYyNzI2MjYzMTIsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6MzQ2MjExNTIyMDc0NDA4fQ==?map=-17.40105,-66.14627,15,normal&fb_locale=es_LA" width="100%" height="151px" frameborder="0" style="border:0"></iframe>
            </div>
         </div>
         <div class="contact_top">
             <div class="col-md-8 contact_left">
                     <h4>Historial</h4>
                    <select id = 'selectReporte' class="input" style="height: 30px;" name="tipo_input">
                        <option value="0" > seleccione su reporte</option>
                        <option value="1" >Porcentaje de violencia familiar</option>
                        <option value="2" >Porcentaje de robos</option> 
                        <option value="3" >Porcentaje de crimenes</option> 
                        <option value="4" >Porcentaje de menores que realizan la denuncia</option>
                        <option value="5" >Porcetaje de mujeres denuncias realizadas</option>
                        <option value="6" >Porcetaje de hombres denuncias realizadas</option>   
                 
                    </select>   
                     <form>
                                       
                      <div class="form_details">
                        <input type="text" class="text" value="FechaFin" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'FechaFin';}">
                        <div class="form_details">
                        <input type="text" class="text" value="FechaIni" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'FechaIni';}">

                       <div class="clearfix"> </div>
                         <div class="sub-button">
                             <input type="submit" value="Enviar">
                         </div>
                      </div>
                   </form>
             </div>
                 </address>
                 </div>
             </div>
                <div class="clearfix"> </div>
          </div>
     </div>
</div>
<!---->
<div class="footer">
     <div class="container">
         <div class="ftr-sec">
             <div class="col-md-4 ftr-grid">
             </div>
             <div class="col-md-4 ftr-grid2">
             <ul>
                </ul>
             </div>
             <div class="col-md-4 ftr-grid3">
             <ul>
                </ul>
             </div>
             <div class="clearfix"></div>
         </div>
     </div>
</div>
<!---->
<div class="copywrite">
     <div class="container">
         <p>VERÓNICA FLORES  UMSS 2017  </p>
     </div>
</div>
<!---->

@stop
