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

                                <!-- Category selection -->
                                <div class="row mb-3">
                                    <label for="category_id" class="col-sm-2 col-form-label">Choose category</label>
                                    <div class="col-sm-10">
                                        <select name="category_id" id="category_id" class="select2-dropdown">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- end row -->

                                <!-- Image upload -->
                                <div class="row mb-3">
                                    <label for="image" class="col-sm-2 col-form-label">Upload images</label>
                                    <div class="col-sm-10">
                                        <input name="images[]" class="form-control @error('images.*') is-invalid @enderror" type="file" id="image" multiple>
                                        @error('images.*')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <!-- Image preview -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <div id="showImages">
                                            <img class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Upload Images">
                            </form>
                            @if($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var files = e.target.files;
                var imageContainer = $('#showImages');
                imageContainer.empty(); // Clear previous images

                if (files.length > 0) {
                    for (var i = 0; i < files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            imageContainer.append('<img class="rounded avatar-lg" src="' + e.target.result + '">');
                        }
                        reader.readAsDataURL(files[i]);
                    }
                } else {
                    imageContainer.append('<img class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">');
                }
            });
        });
    </script>
@endsection
