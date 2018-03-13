     <div class="header">
             <div class="logo">
                 <a href="index.html"><img src="images/logo.jpg" alt=""/></a>
             </div>
             <div class="top-menu">
                 <span class="menu"></span>
                 <ul class="navig">

                      <!-- 'class' => ($this->request->params['action'] == 'home') ? 'active' : 'inactive' -->
                    @if(Auth::guest())
                     <li class="{{ Request::is('/') ? 'active' : '' }}">{!! link_to_action('PagesController@home2', $title = 'Inicio', $parameters = [], $attributes = []) !!}</li>
                     <li class="{{ Request::is('about') ? 'active' : '' }}">{!! link_to_action('PagesController@about', $title = 'Institución', $parameters = [], $attributes = []) !!}
                     </li>

                     <li class="{{ Request::is('staff') ? 'active' : '' }}">{!! link_to_action('PagesController@staff', $title = 'Lista de Denuncias', $parameters = [], $attributes = []) !!}</li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Denuncias<span class="caret"></span> </a>
                            <ul class="dropdown-menu">
                                <li class="{{ Request::is('complaint') ? 'active' : '' }}">{!! link_to_action('ComplaintController@index', $title = 'Denuncias', $parameters = [], $attributes = []) !!}</li>
                                <li><a href="mailto:joe@example.com?subject=feedback" "email me">email me</a></li>
                                <li><a href="mailto:joe@example.com?subject=feedback" "email me">email me</a></li>
                            </ul>
                        </li> 

                         <li class="{{ Request::is('complaint/chart') ? 'active' : '' }}">
                        {!! link_to('complaint/chart', $title = 'Reportes', $attributes = [], $secure = null) !!}
                        </li>
                         <li class="{{ Request::is('complaint/chart') ? 'active' : '' }}">
                        {!! link_to('complaint/chart', $title = 'Categorias', $attributes = [], $secure = null) !!}
                        </li>
                         <li class="{{ Request::is('complaint/process') ? 'active' : '' }}">
                        {!! link_to('complaint/process', $title = 'Control y Seguimiento', $attributes = [], $secure = null) !!}
                        </li>
                    @endif

                    
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
