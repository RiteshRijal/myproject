@extends('layouts.admin')

@section('main-content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>vaccinecenter management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item " ><a href="#">Home</a></li>
                        <li class="breadcrumb-item  active"> vaccinecenter management</li>
                        <li class="breadcrumb-item  active"> update vaccinecenter</li>
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
                <h3 class="card-title">Update Vaccine Center</h3>

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
                <form action ="{{route('admin.vaccinecategory.update',$data1->id)}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="form-group">
                        <label for="name"> Vaccine category Name</label>
                        <input type="text" name="category_name" class="form-control" value="{{$data1->category_name}}">
                        @error('category_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="save">
                        </div>
                </form>
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

