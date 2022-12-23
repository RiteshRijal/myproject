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
                        <li class="breadcrumb-item active " ><a href="#"> Assign Vaccines</a></li>
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
                <h3 class="card-title">  Assign Vaccines</h3>


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
                <form action ="{{route('admin.assign_vaccine.store')}}" method="POST">
                    @csrf
                    </div>
                    <div class="form-group">
                        <label for="name"> Vaccine categories</label>
                        <select name="category_id" id="category_id" class="form-control">
                        <option value=""> Select Categories</option>
                            @foreach($data1['vaccine_categories'] as $Vaccinecategory)
                                <option value="{{$Vaccinecategory->id}}">{{$Vaccinecategory->category_name}} </option>
                            @endforeach
                        </select>

                        @error('category_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
          <div class="form-group">
                <label for="name"> batch Number</label>
                <select name="batch_no" id="batch_no" class="form-control input-lg dynamic" data-dependent="">
                    <option value=""> Select Batch Number</option>
                </select>
                @error('batch_no')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Dozes</label>
                <select name="doze_id" id="doze_id" class="form-control">
                    <option value=""> Select dozes</option>
                    @foreach($data1['dozes'] as $Vacinecategory)
                        <option value="{{$Vacinecategory->id}}">{{$Vacinecategory->doze_name}} </option>
                    @endforeach
                </select>
                @error('doze_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Vaccine Center</label>
                <select name="center_id" id="center_id" class="form-control">
                    <option value=""> Select VaccineCenter</option>
                    @foreach($data1['vaccine_centers'] as $Vacinecategory)
                        <option value="{{$Vacinecategory->id}}">{{$Vacinecategory->name}} </option>
                    @endforeach

                </select>

                @error('center_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name"> number of vaccines</label>
                <input type="number" name="no_of_vaccines" value="" id="no_of_vaccines">

                @error('no_of_vaccines')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name"> Assign Date</label>
                <input type="date" name="assign_date" class="form-control" placeholder="Enter Receive date"/>
                @error('assign_date')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        <div class="form-group">
            <label for="name"> Validity Date</label>
            <input type="date" name="valid_date" class="form-control" placeholder="Enter Receive date"/>
            @error('valid_date')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
                <label for="name"> assign vaccines
                </label>
                <input type="text" name="assign_vaccines" class="form-control">
                @error('assign_vaccines')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="form-group">
                    <label for="name"> Remaining Vaccines</label>
                    <input type="text" name="remaining_vaccines" class="form-control"value="#">
                </div>
                <div class="form-group">
                        <input type="submit" class="btn btn-success" value="save">
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
@section('js')
      <script>
   $(document).ready( function () {
            $('#category_id').change(function (){
                let  vcid = $(this).val();
                $.ajax({
                    url:"{{route('vaccine_category.get_batch_no')}}",
                    type:'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'cviud':vcid
                    },
                    success:function(result) {
                        $('#batch_no').html(result);

                        //call another ajax
                        $.ajax({
                            url: "{{route('vaccine_category.get_dozes_list')}}",
                            type: 'post',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                'cviud': vcid
                            },
                            success: function (result1) {
                                $('#doze_id').html(result1);
                            }
                        });
                    }

                });
            });

       $('#batch_no').change(function (){
           let  did = $(this).val();
           $.ajax({
               url:"{{route('doze_id.get_no_of_vaccines')}}",
               type:'post',
               data: {
                   "_token": "{{ csrf_token() }}",
                   'dviud':did
               },
               success:function(result11) {
                   $('#no_of_vaccines').val(result11);
               }

           });
       });

   });








   //for number  of vaccines
       {{-- jQuery(document).ready( function () {--}}
       {{--     jQuery('#batch_id').change(function (){--}}
       {{--         let  vid=jQuery(this).val();--}}
       {{--         jQuery.ajax({--}}
       {{--             url:'/getno_of_vaccines',--}}
       {{--             type;'post',--}}
       {{--             data:'vid'+vid,'&_token'={{csrf_token()}}',--}}
       {{--             success:function(result){--}}
       {{--                 jQuery('#vaccine-no').html(result)--}}
       {{--             }--}}
       {{--         })--}}

       {{--     });--}}

       {{-- });--}}

    </script>
@endsection


