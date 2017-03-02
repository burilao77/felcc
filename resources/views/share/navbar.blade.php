     <div class="header">
             <div class="logo">
                 <a href="index.html"><img src="images/logo.jpg" alt=""/></a>
             </div>
             <div class="top-menu">
                 <span class="menu"></span>
                 <ul class="navig">
                     <li class="active">{!! link_to_action('PagesController@home', $title = 'Inicio', $parameters = [], $attributes = []) !!}</li>
                     <li>{!! link_to_action('PagesController@about', $title = 'Nosotros', $parameters = [], $attributes = []) !!}
                     </li>
                     <li><a href="program.html">Denuncias</a></li>
                     <li>{!! link_to_action('PagesController@staff', $title = 'Personal', $parameters = [], $attributes = []) !!}</li>
                     <li>{!! link_to_action('PagesController@contact', $title = 'Contáctanos', $parameters = [], $attributes = []) !!}</li>
                 </ul>
             </div>
              <!-- script-for-menu -->
         <script>
                $("span.menu").click(function(){
                    $("ul.navig").slideToggle("slow" , function(){
                    });
                });
         </script>
         <!-- script-for-menu -->

             <div class="clearfix"></div>
     </div>
