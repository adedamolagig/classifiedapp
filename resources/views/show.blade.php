@extends('layouts.our-layout')
@php
$page_title = 'Show';
$selected_menu = 'show';
@endphp
@section('body')
    @include('partial.home-header')
    <section class="tm-white-bg section-padding-bottom">
        <div class="container">
        <div class="row">
            <div class="tm-section-header section-margin-top">
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Show</h2></div>
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
            </div>
            
            @foreach($hotels as $hotel)
                @include('showhotel')
            @endforeach
            
           