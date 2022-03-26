@extends('admin.layout.master')
@section('title')
    <title>About-us</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">About-us</h1>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update About-us Information</h5>
                        </div>
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <form class="flex-grow-1" method="POST" action="{{ route('about-us.update',$about->id) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group g-2 mb-3">
                                        <label for="header">Header</label>
                                        <input type="text" class="form-control"  id="header" name="header" required value="{{$about->header}}">
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="brief">Brief</label>
                                        <input type="text" class="form-control"  id="brief" name="brief"  value="{{$about->brief}}">
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="mission" class="form-label">Our Mission</label>
                                        <textarea class="form-control" id="mission" name="mission" rows="6">{{ $about->mission }}</textarea>
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="vision" class="form-label">Our Vision</label>
                                        <textarea class="form-control" id="vision" name="vision" rows="6">{{ $about->vision }}</textarea>
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="why" class="form-label">Why Us?</label>
                                        <textarea class="form-control" id="why" name="why" rows="6">{{ $about->why }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-sm btn-success mt-1"> Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
