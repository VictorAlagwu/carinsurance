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
                    <li><a href="#">Claims</a></li>
                    <li class="active">View All Claims</li>
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
                    <form method="POST" action="{{url('claims')}}">
                            {{ csrf_field() }}
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label class=" form-control-label">Name of Car</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-car"></i></div>
                                    <select data-placeholder="Choose a Car..." class="standardSelect" name="car_id" tabindex="1">
                                        @foreach ($insurances as $insurance)
                                            <option value="{{$insurance->car->id}}">{{$insurance->car->name. '(Plate Number: '. $insurance->car->plate_number.')'}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small class="form-text text-muted">ex. Toyota High Lander</small>
                            </div>
                               
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" name="submit">Send Claims</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection