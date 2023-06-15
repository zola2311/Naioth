
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

                            <h4 class="card-title">Upload images </h4>

                            <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">

                                @csrf



                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Choose category</label>
                                    <div class="col-sm-10">
                                        <select name="category_id" id="category_id" class="select2-dropdown">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <!-- end row -->




                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Upload images </label>
                                    <div class="col-sm-10">
                                        <input name="images[]" class="form-control" type="file" id="image" multiple="" >
                                    </div>
                                </div>
                                <!-- end row -->
                                @error('images[]')
                                <span class="text-danger">{{$message}}</span>
                                @enderror

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg" src="{{  url('upload/no_image.jpg') }}" alt="Card image cap">
                                    </div>
                                </div>
                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="upload images">
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
