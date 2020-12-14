@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <div class="row">
                <h1>Add New Tor</h1>
            </div>

            <form action="/p" enctype="multipart/form-data" method="post">
                @csrf

                <div class="form-group row">
                    <label for="text" class="col-md-4 col-form-label">Post Text</label>

                    <input id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ old('text') }}" required autofocus>

                    @error('text')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row mt-4">
                    <button class="button-primary" style="border: none;">Add New Tor</button>
                </div>
            </form>

        </div>

    </div>
</div>
@endsection
