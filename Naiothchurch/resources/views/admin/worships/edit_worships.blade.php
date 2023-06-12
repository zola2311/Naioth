@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Worship Edit Page </h4>

                            <form method="post" action="{{ route('update.worship') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{  $worship->id }}">

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Worship Name</label>
                                    <div class="col-sm-10">
                                        <input name="worships_name" class="form-control" type="text" value="{{ $worship->worships_name }}" id="example-text-input">
                                        @error('worships_name')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Worship Description </label>
                                    <div class="col-sm-10">
                                        <input name="worships_description" class="form-control" type="text" value="{{ $worship->worships_description }}" id="example-text-input">

                                        @error('worships_description')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Worship URL</label>
                                    <div class="col-sm-10">
                                        <input name="worships_url" class="form-control" type="text" value="{{ $worship->worships_url }}" id="example-text-input">
                                        @error('worships_url')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>



                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Category Data">
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
