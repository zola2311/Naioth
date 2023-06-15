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

                            <h4 class="card-title">Create Series Page </h4>


                            <form method="post" action="{{ route('series.store') }}" enctype="multipart/form-data">

                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Series Name</label>
                                    <div class="col-sm-10">
                                        <input  class="form-control" type="text" name="series_name" id="series_name">
                                                                                    @error('series_name')
                                                                                    <span class="text-danger">{{$message}}</span>
                                                                                    @enderror
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Series description</label>
                                    <div class="col-sm-10">
                                        <input  class="form-control" type="text" name="series_description" id="series_description">
                                                                                @error('series_description')
                                                                                <span class="text-danger">{{$message}}</span>
                                                                                @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Series Url</label>
                                    <div class="col-sm-10">
                                        <input  class="form-control" type="text" name="series_url" id="name">
                                                                                    @error('series_url')
                                                                                    <span class="text-danger">{{$message}}</span>
                                                                                    @enderror
                                    </div>
                                </div>

                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Create Series">
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


