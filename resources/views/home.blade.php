@extends('layouts.app')

@section('content')
<div class="container">
    <img src="https://pbs.twimg.com/profile_banners/1007518403979038720/1605860037/1500x500" style="width: 100%; max-height: 300px;  object-fit: cover;" alt="Profile Banner">
    <div class="row">
        <div class="col-12">
            <img src="https://pbs.twimg.com/profile_images/1288073614655467523/OQWj_FjO_400x400.jpg" style="min-height: 75px ;height: 20vw; max-height: 150px; margin-top: -75px; border: 5px solid white;" class="rounded-circle profile-picture" alt="Profile Picture">
        </div>
    </div>
    <div class="row mt-2 ml-3 mb-2">
        <div class="col-12">
            <h5 style="font-weight: 700; font-size: 19px;">{{ $user->name }}</h5>
            <p style="margin-top: -12px; font-size: 15px;" class="text-muted mb-1"><?php echo('@')?>{{ $user->username }}</p>
            <p style="font-size: 15px;" class="mb-1">{{ $user->profile->description }}</p>
            <a href="#">{{ $user->profile->url }}</a>
            <div class="d-flex mt-1">
                <p style="font-size: 15px;" class="mr-3"><strong>43</strong><span class="text-muted"> Following</span></p>
                <p style="font-size: 15px;"><strong>271</strong><span class="text-muted"> Followers</span></p>
            </div>
        </div>
    </div>
    <div class="row mt-3 ml-3" style="flex-wrap: nowrap;">
        <div>
            <img src="https://pbs.twimg.com/profile_images/1288073614655467523/OQWj_FjO_400x400.jpg" style="width: 50px;" class="rounded-circle mr-2" alt="Profile Picture">
        </div>
        <div>
            <div class="d-flex">
                <p class="mb-0"><strong>Romer</strong> <span class="text-muted">@Meffu_ · Dec 3</span></p>
            </div>
            <div>
                <p class="mb-0">Dit is een test tor, hoe vet is dit!Dit is een test tor, hoe vet is dit!Dit is een test tor, hoe vet is dit!</p>
            </div>
            <div class="d-flex justify-content-between action-bar" style="width: 200px;">
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
    <div class="row mt-3 ml-3" style="flex-wrap: nowrap;">
        <div>
            <img src="https://pbs.twimg.com/profile_images/1288073614655467523/OQWj_FjO_400x400.jpg" style="width: 50px;" class="rounded-circle mr-2" alt="Profile Picture">
        </div>
        <div>
            <div class="d-flex">
                <p class="mb-0"><strong>Romer</strong> <span class="text-muted">@Meffu_ · Dec 3</span></p>
            </div>
            <div>
                <p class="mb-0">Dit is een test tor, hoe vet is dit!Dit is een test tor, hoe vet is dit!Dit is een test tor, hoe vet is dit!</p>
            </div>
            <div class="d-flex justify-content-between action-bar" style="width: 200px;">
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
</div>
@endsection
