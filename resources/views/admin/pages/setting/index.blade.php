@extends('admin.layout.master')
@section('title')
    <title>Setting</title>
@endsection
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Setting</h1>
            </div>
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">App Logo</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="{{ $App_logo }}" alt="{{$App_Name}}" class="img-fluid rounded-circle mb-2" style="width:150px; height:150px;" />
                            <div>
                                <button data-bs-toggle="modal" data-bs-target="#changeLogo" class="btn btn-primary btn-sm">Change Logo</button>
                            </div>
                        </div>
                        <hr class="my-0" />
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Icon</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="{{ $App_icon }}" alt="{{$App_Name}}" class="img-fluid rounded-circle mb-2" style="width:150px; height:150px;" />
                            <div>
                                <button data-bs-toggle="modal" data-bs-target="#changeIcon" class="btn btn-primary btn-sm">Change Icon</button>
                            </div>
                        </div>
                        <hr class="my-0" />
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">About Us</h5>
                        </div>
                        <div class="card-body text-center">
                           <a href="{{$About_Us_Image}}"> <img src="{{ $About_Us_Image }}" alt="{{$App_Name}}" class="img-fluid rounded mb-2" style="width:250px; height:150px;" /></a>
                            <div>
                                <button data-bs-toggle="modal" data-bs-target="#changeAboutUsImage" class="btn btn-primary btn-sm">Change Image</button>
                            </div>
                        </div>
                        <hr class="my-0" />
                    </div>
                </div>
                <!--logo Modal -->
                <div class="modal fade" id="changeLogo" tabindex="-1" aria-labelledby="changeLogoLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form method="post" action="{{route('setting.logo.change')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="changeLogoLabel">Change Logo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="logo" name="logo" placeholder="Image" accept="image/*">
                                        <label for="logo">Logo</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--icon Modal -->
                <div class="modal fade" id="changeIcon" tabindex="-1" aria-labelledby="changeIconLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form method="post" action="{{route('setting.icon.change')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="changeIconLabel">Change Icon</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="icon" name="icon" placeholder="Image" accept="image/*">
                                        <label for="icon">Icon</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--about us image Modal -->
                <div class="modal fade" id="changeAboutUsImage" tabindex="-1" aria-labelledby="changeAboutUsImageLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form method="post" action="{{route('setting.about_us_image.change')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="changeAboutUsImageLabel">Change About us Image</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" id="aboutUs" name="aboutUs" placeholder="Image" accept="image/*">
                                        <label for="aboutUs">About Us</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Update Application Setting</h5>
                        </div>
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <form class="flex-grow-1" method="POST" action="{{ route('setting.update',1) }}">
                                    @csrf
                                    @method('put')
                                    <div class="form-group g-2 mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control"  id="name" name="name" required value="{{$App_Name}}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="email">Email One</label>
                                        <input type="email" class="form-control"  id="email" name="email_one" required value="{{$App_Email_One}}">
                                        @error('email_one')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="email">Email Two</label>
                                        <input type="email" class="form-control"  id="email" name="email_two" required value="{{$App_Email_Two}}">
                                        @error('email_two')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="phone">Mobile Number One</label>
                                        <input type="text" class="form-control"  id="phone" name="phone_one" required value="{{$App_Mobile_One}}">
                                        @error('phone_one')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="phone">Mobile Number Two</label>
                                        <input type="text" class="form-control"  id="phone" name="phone_two" required value="{{$App_Mobile_Two}}">
                                        @error('phone_two')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="about_us" class="form-label">About Us</label>
                                        <textarea class="form-control" id="about_us" name="about_us" rows="6">{{ $About_Us }}</textarea>
                                        @error('about_us')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="facebook">Facebook link</label>
                                        <input type="text" class="form-control"  id="facebook" name="facebook" required value="{{$Facebook}}">
                                        @error('facebook')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="google">Google Link</label>
                                        <input type="text" class="form-control"  id="google" name="google" required value="{{$Google}}">
                                        @error('google')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="linkedin">Linkedin Link</label>
                                        <input type="text" class="form-control"  id="linkedin" name="linkedin" required value="{{$Linkedin}}">
                                        @error('linkedin')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group g-2 mb-3">
                                        <label for="weekday_start">Weekday Start</label>
                                        <input type="text" class="form-control"  id="weekday_start" name="weekday_start" required value="{{$Weekday_start}}">
                                        @error('weekday_start')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="weekday_end">Weekday End</label>
                                        <input type="text" class="form-control"  id="weekday_end" name="weekday_end" required value="{{$Weekday_end}}">
                                        @error('weekday_end')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group g-2 mb-3">
                                        <label for="opening_hour">Opening Hour</label>
                                        <input type="time" class="form-control"  id="opening_hour" name="opening_hour" required value="{{$Opening_hour}}">
                                        @error('opening_hour')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group g-2 mb-3">
                                        <label for="closing_hour">Closing Hour</label>
                                        <input type="time" class="form-control"  id="closing_hour" name="closing_hour" required value="{{$Closing_hour}}">
                                        @error('closing_hour')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
