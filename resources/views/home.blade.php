@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br> What do you want to do next?
                    
                </div>
            </div>
        </div> 
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Chat and Chill</h5>
            <p class="card-text">Communicate and Interact with other members</p>
            <a href="{{ route('chatapp') }}" class="btn btn-outline-warning coolbtn">check out chatApp</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Browse Some Images</h5>
            <p class="card-text">you might find you next wallpaper here!</p>
            <a href="{{ route('error') }}" class="btn btn-outline-warning coolbtn">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
