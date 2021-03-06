<!-- Header -->
<div class="tm-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
                <a href="{{ route('homepage') }}" class="tm-site-name">HOMEs.ng</a>	
            </div>
            <div class="col-lg-6 col-md-8 col-sm-9">
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="tm-nav">
                    <ul>
                        <li><a href="{{ route('homepage') }}" class="{{ !isset($selected_menu)?'active':'' }}">Home</a></li>
                        <li><a href="{{ route('login') }}" class="{{ isset($selected_menu)?($selected_menu=='login')?'active':'':'' }}">Login</a></li>
                        <li><a href="{{ route('register') }}" class="{{ isset($selected_menu)?($selected_menu=='register')?'active':'':'' }}">Register</a></li>
                        <li><a href="{{ route('hotel') }}" class="{{ isset($selected_menu)?($selected_menu=='hotel')?'active':'':'' }}">All Hotel</a></li>
                        <!--<li><a href="{{ route('create') }}" class="{{ isset($selected_menu)?($selected_menu=='create')?'active':'':'' }}">Create Hotel</a></li>-->
                    </ul>
                </nav>		
            </div>				
        </div>
    </div>	  	
</div>