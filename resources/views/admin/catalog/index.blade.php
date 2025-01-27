@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($catalogs as $key => $catalog)
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $catalog->name }}</td>
                                <td>{{count($catalog->books)}}</td>
                                <td class="text-center">
                                   {{ date('H:i:s-d/m/Y', strtotime($catalog->created_at)) }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

@endsection
