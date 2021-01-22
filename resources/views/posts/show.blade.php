@extends('layouts.layout')

@section('content')

    <div class="container-sm profile">
        <div class="d-flex px-3 py-3 position-fixed w-100" style="background-color: white; z-index: 9999; top: 0; border-bottom: 1px solid #ebeef0;">
            <a href="javascript:history.back()">
                <img src="{{ asset('svg/back.svg') }}" class="my-auto pr-4" style="height: 1.5rem;" alt="Back">
            </a>
            <div class="my-auto">
                <h5 style="font-weight: 700; font-size: 19px;" class="p-0 ">Tweet</h5>
            </div>
        </div>

        <div class="row py-2" style="flex-wrap: nowrap;">
            <div style="margin-top: 65px;">
                <img src="https://pbs.twimg.com/profile_images/1347983866179559431/5q3Y4QhU_400x400.jpg" style="width: 50px;" class="rounded-circle mr-2" alt="Profile Picture">
            </div>
            <div class="w-100" style="margin-top: 65px;">
                <div>
                    <p class="mb-0"><strong>{{ $post->user->name }}</strong></p>
                    <p class="mb-0" style="margin-top: -5px;">
                        <span class="text-muted"><?php echo('@')?>{{$post->user->username}}</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row py-2">
            <div class="w-100">
                <p class="mb-1" style="font-size: 19px;">{{ $post->text }}</p>
                @if($post->image)
                    <img src="/storage/{{ $post->image }}" class="my-2 post-image" style="width: 100%; max-height: 350px; object-fit: cover; border-radius: 15px;" alt="Image">
                @endif
            </div>
        </div>

        <div class="d-flex justify-content-between px-5 py-2" style="border-top: 1px solid #ebeef0;">
            <div class="d-flex">
                <img src="{{ asset('svg/comment.svg') }}" class="my-auto pr-2" style="height: 22px" alt="Comment">
            </div>
            <div class="d-flex">
                <img src="{{ asset('svg/retweet.svg') }}" class="my-auto pr-2" style="height: 22px" alt="Retweet">
            </div>
            <div class="d-flex">
                <img src="{{ asset('svg/like.svg') }}" class="my-auto pr-2" style="height: 22px" alt="Like">
            </div>
        </div>

        <div class="d-flex justify-content-between px-5 py-2" style="border-top: 1px solid #ebeef0; border-bottom: 1px solid #ebeef0;">
            <div class="d-flex">
                <img src="{{ asset('svg/comment.svg') }}" class="my-auto pr-2" style="height: 22px" alt="Comment">
            </div>
            <div class="d-flex">
                <img src="{{ asset('svg/retweet.svg') }}" class="my-auto pr-2" style="height: 22px" alt="Retweet">
            </div>
            <div class="d-flex">
                <img src="{{ asset('svg/like.svg') }}" class="my-auto pr-2" style="height: 22px" alt="Like">
            </div>
        </div>

    </div>




@endsection