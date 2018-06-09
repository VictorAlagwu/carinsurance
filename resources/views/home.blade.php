@extends('layouts.dash')
@section('content')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="row">

            <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-1">
                        <div class="card-body pb-0">
                            <h4 class="mb-0">
                                <span>54</span>
                            </h4>
                            <p class="text-light">Cars Registered</p>
    
                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <canvas id="widgetChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-3">
                        <div class="card-body pb-0">
                            <h4 class="mb-0">
                                <span>32</span>
                            </h4>
                            <p class="text-light">Insurance</p>
    
                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <canvas id="widgetChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-white bg-flat-color-2">
                        <div class="card-body pb-0">
                            
                            <h4 class="mb-0">
                                <span>10</span>
                            </h4>
                            <p class="text-light">Claims</p>
    
                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <canvas id="widgetChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- .content -->
    @endsection