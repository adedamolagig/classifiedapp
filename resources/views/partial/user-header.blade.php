<!-- Header -->
<div class="tm-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
                <a href="{{ route('homepage') }}" class="tm-site-name">Holiday</a>	
            </div>
            <div class="col-lg-6 col-md-8 col-sm-9">
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="tm-nav">
                    <ul>
                        <li><a href="{{ route('home') }}" class="active">Dashboard</a></li>
                        <li><a href="{{ route('login') }}">Book a room</a></li>
                        <li><a href="#" id='logout-url'>Logout</a></li>
                    </ul>
                    <form method="post" action="{{ route('logout') }}" id='logout-form'>
                        {{ csrf_field() }}
                    </form>
                </nav>		
            </div>				
        </div>
    </div>	  	
</div>