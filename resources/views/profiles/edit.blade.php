@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 offset-2">

                <div class="row">
                    <a href="javascript:history.back()" class="my-auto mr-4">
                        <img src="{{ asset('svg/back.svg') }}" style="height: 2rem;" alt="Back">
                    </a>
                    <h1>Edit Profile</h1>
                </div>

                <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PATCH')

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">Name</label>

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?: $user->name }}" required>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">Bio</label>

                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?:  $user->profile->description }}">

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label">Website</label>

                        <input id="url" type="url" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?:  $user->profile->url }}">

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mt-4">
                        <button class="button-primary" style="border: none;">Save Profile</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
