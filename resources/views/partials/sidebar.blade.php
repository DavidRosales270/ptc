<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-avatar">
                <div class="dropdown">
                    
                    <div class="name"><strong>{{ Auth::user()->name }}</strong></div>
                </div>
            </li>
          
                <li class="">
                    <a href="{{ route('admin.user') }}" class="">
                        <i class="fa fa-users fa-fw"></i> Usuarios 
                    </a>
                </li>

                <li class="">
                    <a href="{{ route('admin.announce') }}" class="">
                        <i class="fa fa-users fa-fw glyphicon glyphicon-list-alt"></i> Anuncios 
                    </a>
                </li>
                
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>