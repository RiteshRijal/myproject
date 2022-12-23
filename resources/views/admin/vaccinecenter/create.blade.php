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
                        <li class="breadcrumb-item  active">Vaccinecenter management</li>
                        <li class="breadcrumb-item  active">Create</li>
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
                <h3 class="card-title">Add New Vaccine Center</h3>

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
                <form action ="{{route('admin.vaccinecenter.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name"> Vaccinecenter No:</label>
                        <input type="text" name="center_number" class="form-control">
                        @error('center_number')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name"> Vaccinecenter Name</label>
                        <input type="text" name="name" class="form-control">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="location"> location</label>
                        <input type="text" name="location" class="form-control">
                        @error('location')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="location">Country</label>
                        <input type="text" name="country" class="form-control">
                        @error('country')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Disrict"> District</label>
                        <input type="text" name="district" class="form-control">
                        @error('district')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ward no"> ward number</label>
                        <input type="number" name="ward_number" class="form-control">
                        @error('ward_number')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="ward no">Street</label>
                        <input type="text" name="street" class="form-control">
                        @error('street')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="ward no">latitude</label>
                        <input type="text" name="latitude" class="form-control">
                        @error('latitude')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="ward no">longitude</label>
                        <input type="text" name="longitude" class="form-control">
                        @error('longitude')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>


                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="radio" name="status"  value="1">Active
                        <input type="radio" name="status"  value="0">De Active
                        @error('status')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
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
