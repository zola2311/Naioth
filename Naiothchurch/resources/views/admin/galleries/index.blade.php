{{--<h1>Galleries</h1>--}}
{{--@foreach($galleries as $gallery)--}}
{{--    <h2>{{ $gallery->title }}</h2>--}}
{{--    <img src="{{ $gallery->image }}" alt="{{ $gallery->title }}" width="200" height="200">--}}
{{--@endforeach--}}
@extends('admin.admin_master')
@section('admin')


    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Gallery Image All</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">All Gallery Image </h4>


                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Gallery Images</th>
                                    <th>Action</th>

                                </thead>


                                <tbody>
                                @php($i = 1)
                                @foreach($allImages as $item)
                                    <tr>
                                        <td>
                                            {{ $i++}}
                                        </td>
                                        <td>
                                            <img src="{{ asset($item->images) }}" style="width: 60px; height: 50px;">
                                        </td>

                                        <td>
                                            <a href="{{ route('edit.image',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

                                            <a href="{{ route('delete.image',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->



        </div> <!-- container-fluid -->
    </div>


@endsection
