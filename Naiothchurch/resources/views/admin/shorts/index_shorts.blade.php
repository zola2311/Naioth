@extends('admin.admin_master')
@section('admin')


    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> All Shorts</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Shorts All Data </h4>


                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Shorts Name</th>
                                    <th>Shorts Description</th>
                                    <th>Shorts Url</th>
                                    <th>Action</th>

                                </thead>


                                <tbody>
                                @php($i = 1)
                                @foreach($shorts as $item)
                                    <tr>
                                        <td> {{ $i++}} </td>
                                        <td> {{ $item->shorts_name}} </td>
                                        <td> {{Str::limit($item->shorts_description, 50)}} </td>
                                        <td> {{ $item->shorts_url}} </td>

                                        <td>
                                            <a href="{{ route('edit.short',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

                                            <a href="{{ route('delete.short',$item->id) }}" class="btn btn-danger sm" title="Delete Data"
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
