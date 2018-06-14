@extends('layouts.admin')

@section('content')
<div class="animated fadeIn" style="margin-left:10px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <h3>Add Package</h3>
            <div class="panel panel-default">
                <hr>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('admin/packages')}}">
                        {{ csrf_field() }}

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label for="name" class="form-control-label">Package Name</label>
                            </div>
                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                            <br>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label for="taxrate" class="form-control-label">Amount</label>
                            </div>
                            <div class="col-md-9">
                                <input id="amount" type="number" class="form-control" name="amount" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Occupation
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Package Name</th>
                        <th scope="col">Package Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($packages as $package)
                        <tr>
                            <td scope="row"s>{{$package->id}}</td>
                            <td>{{$package->name}}</td>
                            <td>{{$package->amount}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection