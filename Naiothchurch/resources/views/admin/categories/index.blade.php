{{--@foreach ($categories as $category)--}}
{{--    <h2>{{ $category->name }}</h2>--}}

{{--    <ul>--}}
{{--        @foreach ($category->galleries as $gallery)--}}
{{--            <li>{{ $gallery->name }}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--@endforeach--}}

@extends('admin.admin_master')
@section('admin')


    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> All Categories</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Categories All Data </h4>


                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>CategoryImage</th>
                                    <th>Action</th>

                                </thead>


                                <tbody>
                                @php($i = 1)
                                @foreach($categories as $item)
                                    <tr>
                                        <td> {{ $i++}} </td>
                                        <td> {{ $item->name }} </td>
                                        <td> {{ Str::limit($item->description, 50)}} </td>
                                        <td> <img src="{{ asset($item->category_image) }}" style="width: 60px; height: 50px;"> </td>


                                        <td>
                                            <a href="{{ route('edit.category',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

                                            <a href="{{ route('delete.category',$item->id) }}" class="btn btn-danger sm" title="Delete Data"
                                               id="delete">  <i class="fas fa-trash-alt"></i> </a>

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
