@extends('layouts.admin')

@section('header', 'Catalog')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                    <h3 class="card-title mb-0">Catalog</h3>
                    <a href="{{ url('catalogs/create') }}" class="btn btn-black btn-sm">
                        <i class="fas fa-plus"></i> Create New Catalog
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Language</th>
                                <th class="text-center">Number of Books</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($catalogs as $key => $catalog)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $catalog->name }}</td>
                                <td>{{ $catalog->title }}</td>
                                <td>{{ $catalog->language }}</td>
                                <td class="text-center">{{ count($catalog->books) }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ url('catalog/'.$catalog->id.'/edit')}}" class="btn btn-sm btn-primary mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ url('catalog', ['id' => $catalog->id])}}" method="post" onsubmit="return confirm('Are you sure you want to delete this catalog?');">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td class="text-center">{{ date('H:i:s - d/m/Y', strtotime($catalog->created_at)) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-md-10 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection