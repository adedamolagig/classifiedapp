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
                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
