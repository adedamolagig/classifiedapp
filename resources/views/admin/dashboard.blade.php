@extends('layouts.our-layout')
@php
$page_title = 'Admin Dashboard';
@endphp
@section('body')
    @include('partial.admin-header')
    
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Administrator's Dashboard</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">Total Rooms
                                <p>83</p>
                            </div>
                            <div class="col-sm-6">Total Bookings
                                <p>90</p>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>