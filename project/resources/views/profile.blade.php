@extends('layout')

@section('title', 'Profile')

@section('content')

<div class="mt-5">
    
    @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        </div>
    @endif

    
    @if(session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="container">
        <h1>User Profile</h1>
        <!-- <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $user->firstname }} {{ $user->lastname }}</h5>
                <p class="card-text">Email: {{ $user->emailaddress }}</p>
                <p class="card-text">Mobile: {{ $user->mobilenumber }}</p>
                <p class="card-text">Username: {{ $user->username }}</p>
                <div class="profile-picture">
                    <img src="{{ asset('profile_pictures/' . $user->profile_picture) }}" alt="Profile Picture" style="width: 100px; height: 100px; border-radius: 50%;">
                </div>
                
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
            </div>
        </div> -->
    </div>
</div>
@endsection
