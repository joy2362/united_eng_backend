@extends('admin.layout.master')
@section('title')
    <title>Gallery</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Gallery
                <a href="{{route('gallery.index')}}" class="float-end btn btn-sm btn-success" >View Gallery</a>
            </h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-3">Edit Gallery</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="{{route('gallery.update',$gallery->id)}}">
                                @csrf
                                @method('put')
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$gallery->name}}">
                                </div>
                                <div class="form-group mb-3">
                                    <a href="{{$gallery->GalleryImage}}" >
                                        <img src="{{$gallery->GalleryImage}}" alt="{{$gallery->name}}" height="120" width="120"/>
                                    </a>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="image" name="image" accept="image/*" >
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')

@endsection
