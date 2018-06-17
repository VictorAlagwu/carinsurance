@extends('layouts.admin')
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
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Insurance</a></li>
                    <li class="active">View All Insurance</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Owner Name</th>
                                <th>Car Name</th>
                                <th>Plate Number</th>
                                <th>Validity</th>
                                <th>Plan</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($insurances as $insurance)
                            <tr>
                                <td>{{$insurance->id}}</td>
                                <td>{{$insurance->user->name}}</td>
                                <td>{{$insurance->car->name}}</td>
                                <td>{{$insurance->car->plate_number}}</td>
                                <td>{{$insurance->validity}}</td>
                                <td>{{$insurance->package->name}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div>
@endsection