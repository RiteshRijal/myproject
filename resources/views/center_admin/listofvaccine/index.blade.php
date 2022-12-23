@extends('layouts.center_admin')

@section('main-content1')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Welcome Admin </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item " active><a href="#">Home</a></li>
                        <li class="breadcrumb-item  active">Center Admin Dashboard</li>
                        <li class="breadcrumb-item " ><a href="#">List of Vaccines</a></li>


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
                <h3 class="card-title"> List of Assign Vaccines</h3>
               >




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
                        <th>Categories</th>
                        <th>Batch Number</th>
                        <th>dozes</th>
                        <th>Center Name</th>
                        <th>total vaccines</th>
                        <th>Assign date</th>
                        <th>valid date</th>

                        <th> Action</th>
                    </tr>
                    @foreach($data1 as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->category_id}}</td>
                            <td>{{$item->batch_no}}</td>
                            <td>{{$item->doze_id}}</td>
                            <td>{{$item->center_id}}</td>
                            <td>{{$item->no_of_vaccines}}</td>
                            <td>{{$item->assign_date}}</td>
                            <td>{{$item->valid_date}}</td>
                            <td>
                                <a href="{{route('admin.assign_vaccine.show', $item->id)}}" class="btn btn-info">View</a>
                                <a href="{{route('admin.assign_vaccine.edit', $item->id)}}" class="btn btn-warning">Edit</a>

                                <form action ="{{route('admin.assign_vaccine.destroy',$item->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" value="delete"class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

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

