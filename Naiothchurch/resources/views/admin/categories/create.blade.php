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

                            <h4 class="card-title">Create Category Page </h4>

                            <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">


                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <input name="name" class="form-control" type="text"  id="name">
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Category  Description</label>
                                    <div class="col-sm-10">

                                        <textarea id="elm1"name="description"></textarea>
                                        @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror


                                    </div>
                                </div>
                                <!-- end row -->





                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Category Image </label>
                                    <div class="col-sm-10">
                                        <input name="category_image" class="form-control" type="file"  id="image">


                                        @error('category_image')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                <label for="example-text-input"class="col-sm-2col-form-label"></label>
                                <div class="col-sm-10">
                                <img id="showImage"class="rounded avatar-lg"src="{{url('upload/no_image.jpg')}}"alt="Cardimagecap">
                                 </div>
                                </div>



                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Create Category">
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

