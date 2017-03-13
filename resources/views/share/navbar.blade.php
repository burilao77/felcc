     <div class="header">
             <div class="logo">
                 <a href="index.html"><img src="images/logo.jpg" alt=""/></a>
             </div>
             <div class="top-menu">
                 <span class="menu"></span>
                 <ul class="navig">
                   <!-- 'class' => ($this->request->params['action'] == 'home') ? 'active' : 'inactive' -->
                     <li class="{{ Request::is('/') ? 'active' : '' }}">{!! link_to_action('PagesController@home', $title = 'Inicio', $parameters = [], $attributes = []) !!}</li>
                     <li class="{{ Request::is('about') ? 'active' : '' }}">{!! link_to_action('PagesController@about', $title = 'Institución', $parameters = [], $attributes = []) !!}
                     </li>
                     <li class="{{ Request::is('complaint') ? 'active' : '' }}">{!! link_to_action('ComplaintController@index', $title = 'Denuncias', $parameters = [], $attributes = []) !!}</li>
                     <li class="{{ Request::is('staff') ? 'active' : '' }}">{!! link_to_action('PagesController@staff', $title = 'Personal', $parameters = [], $attributes = []) !!}</li>
                     <li class="{{ Request::is('contact') ? 'active' : '' }}">{!! link_to_action('PagesController@contact', $title = 'Reportes', $parameters = [], $attributes = []) !!}</li>
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
