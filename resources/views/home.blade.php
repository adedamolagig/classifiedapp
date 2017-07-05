@extends('layouts.our-layout')
@php
$page_title = 'Welcome '.Auth::user()->name;
@endphp
@section('body')
    @include('partial.user-header')
    <section class="tm-white-bg section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="tm-section-header section-margin-top">
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Welcome {{ Auth::user()->first_name }} </h2></div>
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            <!-- Content -->
                            <nav >
                                <ul class="nav tm-nav">
                                  <li><a class="active" href="{{ route('yourTrips') }}" class="{{ isset($selected_menu)?($selected_menu=='yourTrips')?'active':'':'' }}">Your Trips </a></li>
                                  <li><a href="{{ route('yourEvents') }}" class="{{ isset($selected_menu)?($selected_menu=='yourEvents')?'active':'':'' }}">Your Events</a></li>
                                  <li><a href="{{ route('profile') }}" class="{{ isset($selected_menu)?($selected_menu=='profile')?'active':'':'' }}">Profile</a></li>
                                </ul>
                            </nav>
                            
                            
                            <!--end of Content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
