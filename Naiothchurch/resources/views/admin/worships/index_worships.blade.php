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
                        <h4 class="mb-sm-0"> All Worships</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Worships All Data </h4>


                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Worships Name</th>
                                    <th>Worships Description</th>
                                    <th>Worships url</th>
                                    <th>Action</th>

                                </thead>


                                <tbody>
                                @php($i = 1)
                                @foreach($worships as $item)
                                    <tr>
                                        <td> {{ $i++}} </td>
                                        <td> {{ Str::limit ($item->worships_name, 50 )}} </td>
                                        <td> {{ Str::limit($item->worships_description, 30)}} </td>
                                        <td> {{ Str::limit($item->worships_url, 10 )}} </td>

                                        <td>
                                            <a href="{{ route('edit.worship',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

                                            <a href="{{ route('delete.worship',$item->id) }}" class="btn btn-danger sm" title="Delete Data"
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
