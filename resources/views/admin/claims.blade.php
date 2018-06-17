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
                                <th>Insurance Date</th>
                                <th>Plan/Package</th>
                                <th>Claim Status</th>
                                <th>Status Action

                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($claims as $claim)
                            <tr>
                                <td>{{$claim->id}}</td>
                                <td>{{$claim->user->name}}</td>
                                <td>{{$claim->car->name}}</td>
                                <td>{{$claim->car->plate_number}}</td>
                                <td>{{$claim->car->insurance->validity}}</td>
                                <td>{{$claim->car->insurance->package->name}}</td>
                                <td>{!! $claim->status == 'pending' ? '<strong class="alert alert-danger">Pending</strong>':'<strong class="alert alert-success">Approved</strong>'!!}</td>
                                <td>
                                    <form method="POST" action="{{route('admin/claim/approve/', $claim->id)}}">
                                      {{ csrf_field() }}
                                      <input type="hidden" status="approved"/>
                                      <button type="submit" class="btn btn-success">
                                      <span><i class="fa fa-check"></i>Approve</span>
                                      </button>
                                    </form>
                                    <form method="POST" action="{{route('admin/claim/reject/', $claim->id)}}">
                                      {{ csrf_field() }}
                                      <input type="hidden" status="pending"/>
                                      <button type="submit" class="btn btn-danger">
                                      <span><i class="fa fa-times"></i>Pending</span>
                                      </button>
                                    </form>
                                  </td>
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