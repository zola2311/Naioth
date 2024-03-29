@extends('admin.admin_master')
@section('admin')


    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> All Articles</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Articles All Data </h4>


                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Articles Image</th>
                                    <th>Articles Title</th>
                                    <th>Articles Description</th>
                                    <th>Action</th>

                                </thead>


                                <tbody>
                                @php($i = 1)
                                @foreach($articles as $item)
                                    <tr>
                                        <td> {{ $i++}} </td>
                                        <td> @if($item->article_image)
                                            <img src="{{ asset($item->article_image) }}" style="width: 60px; height: 50px;">
                                            @else
                                                <img src="{{url('upload/no_image.jpg')}}" style="width: 60px; height: 50px;">
                                            @endif
                                        </td>
                                        <td> {{ Str::limit ($item->articles_title, 50 )}} </td>
                                        <td> {{ Str::limit($item->articles_description, 30)}} </td>





                                        <td>
                                            <a href="{{ route('edit.article',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

                                            <a href="{{ route('delete.article',$item->id) }}" class="btn btn-danger sm" title="Delete Data"
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
