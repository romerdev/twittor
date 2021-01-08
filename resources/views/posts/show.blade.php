@extends('layouts.app')

@section('content')

    <div class="d-flex">
        <div class="w-75 image-detail-left" style="height: 100vh; background-color: rgba(0,0,0,0.42);">
            <a href="javascript:history.back()">
                <div class="position-absolute rounded-circle p-2" style="background-color: rgba(0,0,0,0.50); left: 1rem; top: 1rem;">
                    <img src="{{ asset('svg/white/close.svg') }}" class="my-auto" style="height: 22px; width:" alt="Close">
                </div>
            </a>
            <img src="/storage/{{ $post->image }}" style="width: 100%; height: calc(100vh - 50px); object-fit: contain" alt="Image">
            <div class="d-flex text-white">
                <div class="d-flex m-auto justify-content-between" style="width: 300px; height: 50px">
                    <div class="d-flex">
                        <img src="{{ asset('svg/white/comment.svg') }}" class="my-auto pr-2 " style="height: 22px;" alt="Comment">
                        <p class="mb-0 my-auto">3</p>
                    </div>
                    <div class="d-flex">
                        <img src="{{ asset('svg/white/retweet.svg') }}" class="my-auto pr-2" style="height: 22px" alt="Retweet">
                        <p class="mb-0 my-auto">3</p>
                    </div>
                    <div class="d-flex">
                        <img src="{{ asset('svg/white/like.svg') }}" class="my-auto pr-2" style="height: 22px" alt="Like">
                        <p class="mb-0 my-auto">3</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-25 image-detail-right">
            test
        </div>
    </div>

@endsection
