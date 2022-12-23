@extends('layouts.user')

@section('main-content1')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Take An Appointment For Vaccines</h2>
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
                <form action ="{{route('vaccine_user.vaccine_request.store11')}}" method="POST">
                @csrf
            </div>
            <div class="form-group">
                <label for="name">  VaccineCenter</label>
                <select name="center_id" id="center_id" class="form-control">
                    <option value=""> Choose Vaccinecenter</option>
                    @foreach($data1['vaccine_centers'] as $vacinecenter)
                        <option value="{{$vacinecenter->id}}">{{$vacinecenter->name}} </option>
                    @endforeach
                </select>
                <h3>Your recommened Center is : {{$recommended_center}}</h3>
                @error('center_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name"> Vaccine categories</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value=""> Choose Categories</option>
                    @foreach($data1['vaccine_categories'] as $Vaccinecategory)
                    <option value="{{$Vaccinecategory->id}}">{{$Vaccinecategory->category_name}} </option>
                    @endforeach
                </select>

                @error('category_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name"> Dose</label>
                <select name="doze_id" id="doze_id" class="form-control">
                    <option value=""> Choose doses</option>
                    @foreach($data1['dozes'] as $doze)
                        <option value="{{$doze->id}}">{{$doze->doze_name}} </option>
                    @endforeach
                </select>

                @error('doze_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name"> appointment Date</label>
                <input type="date" name="appointment_date" class="form-control" placeholder="Enter Receive date"/>
                @error('appointment_date')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="request">
            </div>
        </div>
        </form>

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

