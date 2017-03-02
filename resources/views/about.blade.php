@extends('master')
  @section('content')
<!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>
<!---->
<div class="about-sec">
     <div class="container">
          <div class="about-head">
            <h2>About</h2>
            <h4>Etiam in enim laoreet neque feugiat neque.</h4>
            <p>Suspendisse egestas ut nisi ac gravida. Suspendisse eget ipsum non mi luctus facilisis ac et nisi.
            Aliquam et neque sit amet tellus scelerisque interdum vel id turpis. Nunc lacinia nec ex id porta. Praesent sagittis massa sit amet nulla varius porttitor non eget nulla. Sed non finibus augue.
            quis feugiat turpis placerat quis.</p>
          </div>
          <div class="video-grid">
             <div class="col-md-6 video">
                 <iframe src="https://player.vimeo.com/video/78554725?color=741731&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
             </div>
             <div class="col-md-6 video-info">
                 <h3>Curabitur vehicula eros eget porta iaculis.</h3>
                 <h4>Donec tristique est id tristique tempor.</h4>
                 <p>Vivamus id magna pretium, pretium orci nec, vestibulum enim. Vivamus sed massa porttitor, lacinia tortor a, luctus mi.
                 Donec sit amet justo sit amet risus malesuada venenatis id ac lacus.Pellentesque sed urna sed dui fermentum vulputate. Nulla facilisi. Mauris eget risus non quam convallis semper non ut turpis.</p>
                 <h4>Nam interdum justo id tortor gravida.</h4>
                 <p>Vivamus id magna pretium, pretium orci nec, vestibulum enim. Vivamus sed massa porttitor, lacinia tortor a, luctus mi.
                 Donec sit amet justo sit amet risus malesuada venenatis id ac lacus.</p>
             </div>
             <div class="clearfix"></div>
          </div>
          <div class="our_work">
             <h3>Our Campus</h3>
             <div class="blog-section">
                     <div class="col-md-4 camp-grid">
                         <a href="single.html"><img src="images/u1.jpg" class="img-responsive" alt=""/></a>
                         <h4><a href="single.html">University</a></h4>
                         <p>Quisque volutpat odio sit amet mi volutpat, a bibendum ante vulputate. Praesent bibendum lorem
                         non sem cursus, eu tempus leo condimentum. Sed nec ullamcorper massa.</p>
                         <a href="single.html" class="more">[ Read More..]</a>
                     </div>
                     <div class="col-md-4 camp-grid">
                         <a href="single.html"><img src="images/u2.jpg" class="img-responsive" alt=""/></a>
                         <h4><a href="single.html">Class Rooms</a></h4>
                         <p>Quisque volutpat odio sit amet mi volutpat, a bibendum ante vulputate. Praesent bibendum lorem
                         non sem cursus, eu tempus leo condimentum. Sed nec ullamcorper massa.</p>
                         <a href="single.html" class="more">[ Read More..]</a>
                     </div>
                     <div class="col-md-4 camp-grid">
                         <a href="single.html"><img src="images/u3.jpg" class="img-responsive" alt=""/></a>
                         <h4><a href="single.html">Liberary</a></h4>
                         <p>Quisque volutpat odio sit amet mi volutpat, a bibendum ante vulputate. Praesent bibendum lorem
                         non sem cursus, eu tempus leo condimentum. Sed nec ullamcorper massa.</p>
                         <a href="single.html" class="more">[ Read More..]</a>
                     </div>
                  <div class="clearfix"></div>
             </div>
         </div>
    </div>
</div>

<!---->
<div class="footer">
     <div class="container">
         <div class="ftr-sec">
             <div class="col-md-4 ftr-grid">
                 <h3>Text Module</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
             </div>
             <div class="col-md-4 ftr-grid2">
                 <h3>Pages</h3>
                 <ul>
                     <li><a href="index.html"><span></span>Home</a></li>
                     <li><a href="about.html"><span></span>About</a></li>
                     <li><a href="program.html"><span></span>Programs</a></li>
                     <li><a href="blog.html"><span></span>Blog</a></li>
                     <li><a href="gallery.html"><span></span>Gallery</a></li>
                     <li><a href="contact.html"><span></span>Contact</a></li>
                 </ul>
             </div>
             <div class="col-md-4 ftr-grid3">
                 <h3>Quick links</h3>
                 <ul>
                     <li><a href="about.html"><span></span>History</a></li>
                     <li><a href="about.html"><span></span>Departments</a></li>
                     <li><a href="gallery.html"><span></span>Services</a></li>
                     <li><a href="blog.html"><span></span>Guidancs</a></li>
                     <li><a href="about.html"><span></span>Team</a></li>
                     <li><a href="contact.html"><span></span>Contact</a></li>
                 </ul>
             </div>
             <div class="clearfix"></div>
         </div>
     </div>
</div>
<!---->
<div class="copywrite">
     <div class="container">
         <p>Copyright © 2015 University. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
     </div>
</div>
<!---->

@stop
