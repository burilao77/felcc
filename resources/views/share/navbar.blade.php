     <div class="header">
             <div class="logo">
                 <a href="index.html"><img src="images/logo.jpg" alt=""/></a>
             </div>
             <div class="top-menu">
                 <span class="menu"></span>
                 <ul class="navig">

                      <!-- 'class' => ($this->request->params['action'] == 'home') ? 'active' : 'inactive' -->
                     <li class="{{ Request::is('/') ? 'active' : '' }}">{!! link_to_action('PagesController@home2', $title = 'Inicio', $parameters = [], $attributes = []) !!}</li>
                     <li class="{{ Request::is('about') ? 'active' : '' }}">{!! link_to_action('PagesController@about', $title = 'Institución', $parameters = [], $attributes = []) !!}
                     </li>
                     <li class="{{ Request::is('complaint') ? 'active' : '' }}">{!! link_to_action('ComplaintController@index', $title = 'Denuncias', $parameters = [], $attributes = []) !!}</li>
                     <li class="{{ Request::is('staff') ? 'active' : '' }}">{!! link_to_action('PagesController@staff', $title = 'Personal', $parameters = [], $attributes = []) !!}</li>
                    <li class="{{ Request::is('complaint/show') ? 'active' : '' }}">
                        {!! link_to('complaint/show', $title = 'Reportes', $attributes = [], $secure = null) !!}
                    </li>
                    <!-- nab condicional-->
                     @if(Auth::guest())
                    <li>{!! link_to_route('login', $title = 'Ingresar') !!}
                    </li>
                    @else
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">                   Salir
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @endif
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
