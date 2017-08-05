<!-- Header -->
<div class="tm-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
                <a href="{{ route('homepage') }}" class="tm-site-name">Holiday</a>	
            </div>
            <div class="collapse navbar-collapse tm-nav">
                <!--<div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>-->
                <nav class="navbar-right navbar-nav navbar-right">
                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('login') }}" class="active">Dashboard</a></li>
                                    <li><a href="{{ route('login') }}">Manage Bookings</a></li>
                                    <li><a href="{{ route('create') }}">Create Hotel</a></li>
                                    <li><a href="{{ route('login') }}">Add Event</a></li>
                                    <li><a href="#" id='logout-url'>Logout</a></li>
                                </ul>
                            </li>
                    <form method="post" action="{{ route('logout') }}" id='logout-form'>
                        {{ csrf_field() }}
                    </form>
                </nav>		
            </div>				
        </div>
    </div>	  	
</div>



