
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

                            <h4 class="card-title">Create Article Page </h4>

                            <form method="post" action="{{ route('article.store') }}" enctype="multipart/form-data">


                                @csrf

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Article Title</label>
                                    <div class="col-sm-10">
                                        <input name="articles_title" class="form-control" type="text"  id="articles_title">
                                        @error('articles_title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Article description</label>
                                    <div class="col-sm-10">
                                        <input name="articles_description" class="form-control" type="text"  id="articles_description">
                                        @error('articles_description')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Article Details</label>
                                    <div class="col-sm-10">

                                        <textarea id="elm1"name="articles_detail"></textarea>
                                        @error('articles_detail')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror


                                    </div>
                                </div>
                                <!-- end row -->





                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Article Image </label>
                                    <div class="col-sm-10">
                                        <input name="article_image" class="form-control" type="file"  id="image">
                                        @error('article_image')
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
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Create Article">
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


