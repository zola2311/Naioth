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

                            <h4 class="card-title">Create Sermon Page </h4>


                            <form method="post" action="{{ route('sermon.store') }}" enctype="multipart/form-data">

                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Sermon Name</label>
                                    <div class="col-sm-10">
                                        <input  class="form-control" type="text" name="sermons_name" id="sermons_name">
                                                                                    @error('sermons_name')
                                                                                    <span class="text-danger">{{$message}}</span>
                                                                                    @enderror
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Sermon description</label>
                                    <div class="col-sm-10">
                                        <input  class="form-control" type="text" name="sermons_description" id="sermons_description">
                                                                                @error('sermons_description')
                                                                                <span class="text-danger">{{$message}}</span>
                                                                                @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> Sermon Url</label>
                                    <div class="col-sm-10">
                                        <input  class="form-control" type="text" name="sermons_url" id="name">
                                                                                    @error('sermons_url')
                                                                                    <span class="text-danger">{{$message}}</span>
                                                                                    @enderror
                                    </div>
                                </div>

                                <!-- end row -->
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Create Sermon">
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


