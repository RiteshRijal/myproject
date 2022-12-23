@extends('layouts.admin')

@section('main-content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>  vaccinecenter Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item " ><a href="#">Home</a></li>
                        <li class="breadcrumb-item  active">Admin Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">details  Of Vaccinecenter</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <p class="alert alert-success">{{session('success')}}</p>
                @endif
                @if(session('error'))
                    <p class="alert alert-danger">{{session('error')}}</p>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th>Center Number</th>
                        <td> {{$data->center_number}}</td>
                    </tr>
                    <tr>
                        <th>Vaccine center Name</th>
                        <td> {{$data->name}}</td>
                    </tr>
                    <tr>
                        <th> location</th>
                        <td> {{$data->location}}</td>
                    </tr>
                    <tr>
                        <th> country</th>
                        <td> {{$data->country}}</td>
                    </tr>
                    <tr>
                        <th>district</th>
                        <td> {{$data->district}}</td>
                    <tr>
                        <th>Ward_Number</th>
                        <td> {{$data->ward_number}}</td>
                    <tr>
                        <th>Street</th>
                        <td> {{$data->street}}</td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td> {{$data->latitude}}</td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td> {{$data->longitude}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td> {{$data->status}}</td>
                    </tr>
                    <tr>
                        <th>Created Date</th>
                        <td> {{$data->created_at}}</td
                    </tr>
                    <tr>
                        <th> Updated Date</th>
                        <td> {{$data->updated_at}}</td
                    </tr>
                </table>

</div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
