@extends('layouts.admin')

@section('main-content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>  vaccine Category Management</h1>
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
                <h3 class="card-title">details  Of Vaccine category</h3>

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
                   <p><b>Category name</b> : {{$data1->category_name}}</p>
                <h5>Vaccine Batches</h5>
                <table class="table table-bordered">
                    <tr>
                        <th> SN</th>
                        <th> batch Number</th>
                        <th>  number vaccines</th>
                        <th>  receive_date</th>
                        <th>  created date</th>
                        <th>  Updated date</th>
                    </tr>
                    @foreach($data2 as $index => $batch)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$batch->batch_no}}</td>
                            <td>{{$batch->no_of_vaccines}}</td>
                            <td>{{$batch->receive_date}}</td>
                            <td>{{$batch->created_at}}</td>
                            <td>{{$batch->updated_at}}</td>

                        </tr>
                    @endforeach


                </table>
                    <h5>Vaccine Dozes</h5>
                    <table class="table table-bordered">
                        <tr>
                            <th> SN</th>
                            <th> Doze name</th>
                        </tr>
                        @foreach($data2 as $index =>$doze)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$doze->doze_name}}</td>
                            </tr>
                    @endforeach
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
