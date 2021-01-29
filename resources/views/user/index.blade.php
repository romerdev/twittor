@extends('layouts.layout')

@section('content')

    <a href="/p/create" class="button-primary tor-button">
        <img src="{{ asset('svg/tor.svg') }}" style="height: 1.5em;" alt="Add Tor">
    </a>

    <div class="container-sm profile">
        <div class="row">
            <div class="d-flex py-2 position-fixed" style="background-color: white; z-index: 9999; top: 0;" >
                <h5 style="font-weight: 700; font-size: 19px;" class="p-0 my-2">Users</h5>
            </div>
        </div>

        <div>
            <p style="margin-top: 54px; margin-bottom: 0"></p>
        </div>

        <hr class="m-0">

        @if($users->count() != 0)
            @foreach($users as $user)
                <a href="/profile/{{ $user->id }}" class="text-decoration-none text-dark">
                    <div class="row py-2" style="flex-wrap: nowrap;">
                        <div>
                            <img src="{{ $user->profile->profileImage() }}" style="width: 50px; height: 50px; object-fit: cover" class="rounded-circle mr-2" alt="Profile Picture">
                        </div>
                        <div class="w-100">
                            <div class="d-flex h-100">
                                <p class="my-auto"><strong>{{ $user->name }}</strong> <span class="text-muted"><?php echo('@')?>{{ $user->username }}</span></p>
                            </div>

                        </div>
                    </div>
                </a>


                <hr class="m-0">

            @endforeach

        @else
            <div class="row d-flex mt-5">
                <div class="mx-auto text-center">
                    <h5 class="font-weight-bold">There are currently no users.</h5>
                    <p class="text-muted">Be the first one!</p>
                </div>
            </div>
        @endif

    </div>
@endsection
