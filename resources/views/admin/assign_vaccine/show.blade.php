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
                        <th>Categories</th>
                        <td> {{$data1->category_id}}</td>
                    </tr>
                    <tr>
                        <th>Batches</th>
                        <td> {{$data1->batch_no}}</td>
                    </tr>
                    <tr>
                        <th>Categories</th>
                        <td> {{$data1->doze_id}}</td>
                    </tr>
                    <tr>
                        <th>Vaccine center Name</th>
                        <td> {{$data1->center_id}}</td>
                    </tr>
                    <tr>
                        <th> Total Vaccines</th>
                        <td> {{$data1->no_of_vaccines}}</td>
                    </tr>
                    <tr>
                        <th> aassign date</th>
                        <td> {{$data1->assign_date}}</td>
                    </tr>
                    <tr>
                        <th>Valid date</th>
                        <td> {{$data1->valid_date}}</td>
                    </tr>

                    <tr>
                        <th>Created Date</th>
                        <td> {{$data1->created_at}}</td
                    </tr>
                    <tr>
                        <th> Updated Date</th>
                        <td> {{$data1->updated_at}}</td
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
