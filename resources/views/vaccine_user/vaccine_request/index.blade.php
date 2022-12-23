@extends('layouts.user')

@section('main-content1')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>View your Appointment list</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item " ><a href="#">Home</a></li>
                        <li class="breadcrumb-item  active">User Dashboard</li>
                        <li class="breadcrumb-item  active">Vaccine Request</li>
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
                <h3 class="card-title"> Request for a vaccines</h3>

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
                        <th> SN</th>
                        <th>Center Name</th>
                        <th>Categories</th>
                        <th>dozes</th>
                        <th>Appointment date</th>
                    </tr>
                    @foreach($data1 as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->center_id}}</td>
                            <td>{{$item->category_id}}</td>
                            <td>{{$item->doze_id}}</td>
                            <td>{{$item->appointment_date}}</td>
                            @endforeach
                            </tr>
                </table>


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

