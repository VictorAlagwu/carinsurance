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
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Car</a></li>
                    <li class="active">New Car</li>
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
                            <strong>Enter Car Details</strong> <small> </small>
                        </div>
                        <form method="POST" action="{{url('cars')}}">
                                {{ csrf_field() }}
                                <div class="card-body card-block">
                                        <div class="form-group">
                                            <label class=" form-control-label">Name of Car</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-car"></i></div>
                                                <input class="form-control" name="name" value="{{$car->name}}">
                                            </div>
                                            <small class="form-text text-muted">ex. Toyota High Lander</small>
                                        </div>
                                        <div class="form-group">
                                            <label class=" form-control-label">Plate Number</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                                <input class="form-control" name="plate_number" value="{{$car->plate_number}}">
                                            </div>
                                            <small class="form-text text-muted">ex. AAA-99-9999</small>
                                        </div>
                                        <div class="form-group">
                                            <label class=" form-control-label">Manufacturer</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                                <input class="form-control" name="manufacturer" value="{{$car->manufacturer}}">
                                            </div>
                                            <small class="form-text text-muted">ex. Fords Motors</small>
                                        </div>
                                        <div class="form-group">
                                            <label class=" form-control-label">Car Color</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                                <input class="form-control" name="color" value="{{$car->color}}">
                                            </div>
                                            <small class="form-text text-muted">ex. Black</small>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary" name="submit">Edit Car Details</button>
                                    </div>

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection