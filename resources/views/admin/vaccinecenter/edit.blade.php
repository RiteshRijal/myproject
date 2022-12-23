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
                <form action ="{{route('admin.vaccinecenter.update',$data->id)}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="form-group">
                        <label for="name"> Vaccinecenter No:</label>
                        <input type="text" name="center_number" class="form-control" value="{{$data->center_number}}">
                        @error('center_number')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name"> Vaccinecenter Name</label>
                        <input type="text" name="name" class="form-control"value="{{$data->name}}">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="location"> location</label>
                        <input type="text" name="location" class="form-control"value="{{$data->location}}">
                        @error('location')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="location">Country</label>
                        <input type="text" name="country" class="form-control"value="{{$data->country}}">
                        @error('country')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Disrict"> District</label>
                        <input type="text" name="district" class="form-control"value="{{$data->district}}">
                        @error('district')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ward no"> ward number</label>
                        <input type="number" name="ward_number" class="form-control"value="{{$data->ward_number}}">
                        @error('ward_number')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="ward no">Street</label>
                        <input type="text" name="street" class="form-control"value="{{$data->street}}">
                        @error('street')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="ward no">latitude</label>
                        <input type="number" name="latitude" class="form-control"value="{{$data->latitude}}">
                        @error('latitude')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="ward no">longitude</label>
                        <input type="number" name="longitude" class="form-control"value="{{$data->longitude}}">
                        @error('longitude')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        @if($data-> status==1)
                        <input type="radio" name="status"  value="1" checked>Active
                        <input type="radio" name="status"  value="0">De Active
                        @else
                            <input type="radio" name="status"  value="1" >Active
                            <input type="radio" name="status"  value="0" checked>De Active
@endif
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
