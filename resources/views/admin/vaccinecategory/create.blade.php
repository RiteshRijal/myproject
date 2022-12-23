@extends('layouts.admin')
@section('main-content')
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
                        <li class="breadcrumb-item  active">Admin Dashboard</li>
                        <li class="breadcrumb-item active " ><a href="#">Vaccines</a></li>
                        <li class="breadcrumb-item " ><a href="#">Create</a></li>
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
                <h3 class="card-title"> Create new Vaccines</h3>
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
                <form action ="{{route('admin.vaccinecategory.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name"> Name of Vaccines</label>
                        <input type="text" name="category_name" class="form-control">
                        @error('category_name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                <div>
               <table class="table table-striped table-bordered" id="batch_wrapper">
                    <tr>
                        <th>Number of Vaccines</th>
                        <th>Receive Date</th>
                        <th>Batch Number</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="no_of_vaccines[]" class="form-control" placeholder="Enter number of vaccines"/></td>
                        <td><input type="date" name="receive_date[]" class="form-control" placeholder="Enter Receive date"/></td>
                        <td><input type="text" name="batch_no[]" class="form-control" placeholder="choose batch number"/></td>
                        <td>
                            <a class="btn btn-block btn-warning sa-warning remove_row"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
        <button class="btn btn-info" type="button" id="addBatch"  style="margin-bottom: 20px">
            <i class="fa fa-plus"></i>
            Add
        </button>


                <h3> Create vaccine category doses</h3>
                <div>
                    <table class="table table-striped table-bordered" id="doze_wrapper">
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="doze_name[]" class="form-control" placeholder="Enter doze name"/></td>
                            <td>
                                <a class="btn btn-block btn-warning sa-warning remove_row"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <button class="btn btn-info" type="button" id="add_doze"  style="margin-bottom: 20px">
                    <i class="fa fa-plus"></i>
                    Add
                </button>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="save">
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
@section('js')
    <script>
        var batch_wrapper = $("#batch_wrapper"); //Fields wrapper
        var add_button_batch = $("#addBatch"); //Add button ID
        var doze_wrapper = $("#doze_wrapper"); //Fields wrapper
        var add_button_doze = $("#add_doze");
        var y = 1;
        $(add_button_batch).click(function (e) { //on add input button click
            e.preventDefault();
            var max_fields = 5; //maximum input boxes allowed
            if (y < max_fields) { //max input box allowed
                y++; //text box increment
                        //add new row
                $("#batch_wrapper tr:last").after(
                    '<tr>'+
                    ' <td> <input type="text" name="no_of_vaccines[]" class="form-control" placeholder="Enter number of vaccines"/>'+
                    '   </td>'+
                    '   <td><input type="date" name="receive_date[]" class="form-control" placeholder="Enter Receive date"/></td>'+
                    '   <td> <input type="text" name="batch_no[]" class="form-control" placeholder="choose batch number"/></td>'+
                    '<td>'+
                    '       <a class="btn btn-block btn-warning sa-warning remove_row"><i class="fa fa-trash"></i></a>'+
                    '</td>'+
                    '</tr>'
                );

            }else{
                alert('Maximum Attribute Limit is 5');
            }
        });
        //remove row
        $(batch_wrapper).on("click", ".remove_row", function (e) {
            e.preventDefault();
            $(this).parents("tr").remove();
            y--;
        });
        $(add_button_doze).click(function (e) { //on add input button click
            e.preventDefault();
            var max_fields = 5; //maximum input boxes allowed
            if (y < max_fields) { //max input box allowed
                y++;
                //add new row
                $("#doze_wrapper tr:last").after(
                    '<tr>'+
                    ' <td> <input type="text" name="doze_name[]" class="form-control" placeholder="Enter doze name"/>'+
                    '   </td>'+
                    '<td>'+
                    '       <a class="btn btn-block btn-warning sa-warning remove_row"><i class="fa fa-trash"></i></a>'+
                    '</td>'+
                    '</tr>'
                );

            }else{
                alert('Maximum Attribute Limit is 5');
            }
        });
        //remove row
        $(doze_wrapper).on("click", ".remove_row", function (e) {
            e.preventDefault();
            $(this).parents("tr").remove();
            y--;
        });
    </script>
@endsection




