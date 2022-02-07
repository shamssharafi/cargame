@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <h4>  {{ __('You are logged in!') }}</h4>
                    <br/>
                    <h2>Car Brand Finder Game</h2>
   <!-- <a href="http://localhost/laravel3/blog/resources/views/popup.php" class="btn btn-info" role="button">Game rules modal</a>!-->
    <button onclick="myFunction()" class="btn btn-info" role="button">Game rules modal</button>

    <p id="popup"></p>
    
    <script>
    function myFunction() {
      document.getElementById("popup").innerHTML = "<br/>After the start of the game, the user will have 59 seconds to figure out which random car brand the system  has selected. When the user finds a match, the app raises the winner modal. In the winner modal, there are two buttons. Start Again and Save My Score.";
    }
    </script>
    <a href="http://localhost/laravel3/blog/resources/views/auth/countdown.blade.php" class="btn btn-info" role="button">Start the game</a>
                </div>
            </div>
        </div>
    </div>
</div>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  
  <div class="div">
    
  </div>
 
@endsection
