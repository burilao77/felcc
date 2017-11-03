@extends('master')
@section('content')
<!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>
<!--contact-->
<div class="contact">
     <div class="container">
      <div class="row">
                    <h2>Reportes</h2>
        <div class="col-md-6">{!! $chart->render() !!}</div>
        <div class="col-md-6">{!! $chart2->render() !!}</div>
      </div>
     <div class="row">
        <div class="col-md-6">{!! $chart3->render() !!}</div>
        <div class="col-md-6">{!! $chart4->render() !!}</div>
     </div>
        <div class="clearfix"> </div>
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
