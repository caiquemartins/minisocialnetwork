@extends('layouts.app')
<style type="text/css">
    img.profile-img{
        max-width: 150px !important;
        border: 5px solid #fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3)
    }
</style>

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
 
                <div class="card-body text-center">
                    <img class="profile-img" src="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-knives-ninja.png" alt="Avatar" />
                
                 <h1>{{ $user->name }}</h1>
                 <h5>{{ $user->email }}</h5>
                 <h5>{{ $user->dob->format('l j F Y') }} </h5>

                 <button class="btn btn-success">Follow</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection