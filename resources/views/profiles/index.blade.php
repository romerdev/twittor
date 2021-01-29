@extends('layouts.layout')

@section('content')

<a href="/p/create" class="button-primary tor-button">
    <img src="{{ asset('svg/tor.svg') }}" style="height: 1.5em;" alt="Add Tor">
</a>

<div class="container-sm profile">
    <div class="d-flex px-3 py-2 position-fixed w-100" style="background-color: white; z-index: 9999;">
        <a href="javascript:history.back()">
            <img src="{{ asset('svg/back.svg') }}" class="my-auto pr-4" style="height: 1.5rem;" alt="Back">
        </a>
        <div class="my-auto">
            <h5 style="font-weight: 700; font-size: 19px;" class="p-0">{{ $user->name }}</h5>
            <p style="margin-top: -12px; font-size: 13px;" class="text-muted mb-0">
                @if($user->posts->count() == 1)
                    1 Tor
                @else
                    {{ $user->posts->count() }} Tors
                @endif

            </p>
        </div>
    </div>
    <img src="https://pbs.twimg.com/profile_banners/1007518403979038720/1608798528/1500x500" style="width: 100%; max-height: 300px; object-fit: cover; margin-top: 54px;" alt="Profile Banner">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <img src="{{ $user->profile->profileImage() }}" style="height: 150px; width: 150px; object-fit: cover; margin-top: -75px; border: 5px solid white;" class="rounded-circle profile-picture" alt="Profile Picture">
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" class="mt-2 button-secondary profile-button">Edit Profile</a>
            @endcan
            @cannot('update', $user->profile)
                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            @endcannot
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="d-flex">
                <h5 style="font-weight: 700; font-size: 19px;">{{ $user->name }}</h5>
                <img src="{{ asset('svg/verified.svg') }}" class="pl-1" style="height: 23px" alt="Like">
            </div>
            <p style="margin-top: -12px; font-size: 15px;" class="text-muted mb-1"><?php echo('@')?>{{ $user->username }}</p>
            <p style="font-size: 15px;" class="mb-1">{{ $user->profile->description }}</p>
            <a href="{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a>
            <div class="d-flex mt-1">
                <p style="font-size: 15px;" class="mr-3"><strong>{{ $user->following->count() }}</strong><span class="text-muted"> Following</span></p>
                <p style="font-size: 15px;"><strong>{{ $user->profile->followers->count() }}</strong><span class="text-muted"> Followers</span></p>
            </div>
        </div>
    </div>
    <hr class="m-0">

    @if($user->posts->count() != 0)
        @foreach($user->posts as $post)
            <a href="/p/{{ $post->id }}" class="text-decoration-none text-dark">
                <div class="row py-2" style="flex-wrap: nowrap;">
                    <div>
                            <img src="{{ $user->profile->profileImage() }}" style="width: 50px; height: 50px; object-fit: cover" class="rounded-circle mr-2" alt="Profile Picture">
                    </div>
                    <div class="w-100">
                        <div class="d-flex">
                            <p class="mb-0"><strong>{{ $user->name }}</strong> <span class="text-muted"><?php echo('@')?>{{ $user->username }} · {{ $post->created_at->format('M d, Y') }}</span></p>
                        </div>
                        <div>
                            <p class="mb-1">{{ $post->text }}</p>
                            @if($post->image)
                                <img src="/storage/{{ $post->image }}" class="my-2 post-image" style="width: 100%; max-height: 350px; object-fit: cover; border-radius: 15px; border: 1px solid rgb(196, 207, 214);" alt="Image">
                            @endif
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="{{ asset('svg/comment.svg') }}" class="my-auto pr-2" style="height: 16px" alt="Comment">
                                <p class="mb-0 text-muted my-auto">3</p>
                            </div>
                            <div class="d-flex">
                                <img src="{{ asset('svg/retweet.svg') }}" class="my-auto pr-2" style="height: 16px" alt="Retweet">
                                <p class="mb-0 text-muted my-auto">3</p>
                            </div>
                            <div class="d-flex">
                                <img src="{{ asset('svg/like.svg') }}" class="my-auto pr-2" style="height: 16px" alt="Like">
                                <p class="mb-0 text-muted my-auto">3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>


        <hr class="m-0">

        @endforeach
    @else
        <div class="row d-flex mt-5">
            <div class="mx-auto text-center">
                <h5 class="font-weight-bold"><?php echo('@')?>{{ $user->username }} hasn't placed any Tors.</h5>
                <p class="text-muted">When they do, their media will show up here.</p>
            </div>
        </div>
    @endif

</div>
@endsection
