@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <img src="https://pbs.twimg.com/profile_banners/1007518403979038720/1605860037/1500x500" style="width: 100%; max-height: 300px;  object-fit: cover;" alt="Profile Banner">
            <img src="https://pbs.twimg.com/profile_images/1288073614655467523/OQWj_FjO_400x400.jpg" style="height: 20vw; max-height: 150px; margin-top: -75px; border: 5px solid white" class="ml-3 rounded-circle" alt="Profile Picture">
        </div>
    </div>
    <div class="row mt-2 ml-3">
        <div class="col-12">
            <h5 style="font-weight: 700; font-size: 19px;">Romer</h5>
            <p style="margin-top: -12px; font-size: 15px;" class="text-muted mb-1">@Meffu_</p>
            <p style="font-size: 15px;" class="mb-1">17 y/o • 💻 Webdeveloper</p>
            <div class="d-flex">
                <p style="font-size: 15px;" class="mr-3"><strong>43</strong><span class="text-muted"> Following</span></p>
                <p style="font-size: 15px;"><strong>271</strong><span class="text-muted"> Followers</span></p>
            </div>
        </div>
    </div>
    <div class="row mt-2 ml-3 d-flex">
        <div>
            <img src="https://pbs.twimg.com/profile_images/1288073614655467523/OQWj_FjO_400x400.jpg" style="width: 50px;" class="rounded-circle mr-2" alt="Profile Picture">
        </div>
        <div style="flex-direction: row">
            <div class="d-flex">
                <p><strong>Romer</strong> <span class="text-muted">@Meffu_ · Dec 3</span></p>
            </div>
            <div>
                <p>Dit is een test tor, hoe vet is dit!</p>
            </div>
        </div>
    </div>
</div>
@endsection
