{{--<form action="{{ route('categories.store') }}" method="POST">--}}
{{--    @csrf--}}

{{--    <label for="name">Category Name</label>--}}
{{--    <input type="text" name="name" id="name">--}}

{{--    <button type="submit">Create Category</button>--}}
{{--</form>--}}

@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Create Other Page </h4>


                                <form method="post" action="{{ route('other.store') }}" enctype="multipart/form-data">

                                @csrf
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Other Name</label>
                                        <div class="col-sm-10">
                                            <input  class="form-control" type="text" name="others_name" id="others_name">
                                            @error('others_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Other description</label>
                                    <div class="col-sm-10">
                                        <input  class="form-control" type="text" name="others_description" id="others_description">
                                        @error('others_description')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                      <!-- end row -->

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"> Other Url</label>
                                        <div class="col-sm-10">
                                            <input  class="form-control" type="text" name="others_url" id="name">
                                            @error('others_url')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Create Other">
                            </form>



                        </div>
                    </div>
                </div> <!-- end col -->



            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection


