@extends('layouts.layout')

@section('content')

    <a href="{{ route("posts.create") }}" class="button-primary tor-button">
        <img src="{{ asset('svg/tor.svg') }}" style="height: 1.5em;" alt="Add Tor">
    </a>

    <div class="container-sm profile">
        <div class="row">
            <div class="d-flex py-2 position-fixed" style="background-color: white; z-index: 9999; top: 0;" >
                <h5 style="font-weight: 700; font-size: 19px;" class="p-0 my-2">Home</h5>
            </div>
        </div>

        <div>
            <p style="margin-top: 54px; margin-bottom: 0"></p>
        </div>

        <hr class="m-0">

        @if($posts->count() != 0)
            @foreach($posts as $post)
                <a href="{{ route("show", $post->id) }}" class="text-decoration-none text-dark">
                    <div class="row py-2" style="flex-wrap: nowrap;">
                        <div>
                            <img src="{{ $post->user->profile->profileImage() }}" style="width: 50px; height: 50px; object-fit: cover" class="rounded-circle mr-2" alt="Profile Picture">
                        </div>
                        <div class="w-100">
                            <div class="d-flex">
                                <p class="mb-0"><strong>{{ $post->user->name }}</strong> <span class="text-muted"><?php echo('@')?>{{ $post->user->username }} · {{ $post->created_at->format('M d, Y') }}</span></p>
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
                    <h5 class="font-weight-bold">You are not following anyone.</h5>
                    <p class="text-muted">When you do, their media will show up here.</p>
                </div>
            </div>
        @endif

    </div>
@endsection
