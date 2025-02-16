@extends('layouts.admin')

@section('title', 'Create Catalog')

@section('header', 'Catalog')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header" style="padding-top: 20px;">
                <h3 class="card-title">Edit Catalog</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('catalog/'.$catalog->id) }}" method="post">
                @csrf
                {{method_field('PUT')}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" required value="{{$catalog->name}}" >
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Enter title" required value="{{$catalog->title}}">
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" id="language" name="language" class="form-control" placeholder="Enter language" required value="{{$catalog->language}}">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection