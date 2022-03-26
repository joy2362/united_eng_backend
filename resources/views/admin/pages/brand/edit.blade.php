@extends('admin.layout.master')
@section('title')
    <title>Brand</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Brand
                <a href="{{route('brand.index')}}" class="float-end btn btn-sm btn-success" >View Brand</a>
            </h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-3">Edit Brand</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="{{route('brand.update',$brand->id)}}">
                                @csrf
                                @method('put')
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$brand->name}}">
                                </div>
                                <div class="form-group mb-3">
                                    <a href="{{$brand->logo}}" >
                                        <img src="{{$brand->logo}}" alt="{{$brand->name}}" height="120" width="120"/>
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
