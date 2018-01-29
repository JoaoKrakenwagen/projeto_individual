@extends('layouts.app')

@section('content')

<head>
<meta charset="utf-8">

<title>Schnee Dust Company</title>
<link rel="stylesheet" type="text/css" href="{!! asset('materialize/css/materialize.min.css')!!}">
<link rel="stylesheet" type="text/css" href="{!! asset('css/schnee.css')!!}">
<!--Import Google Icon Font-->
<link href="{!! asset('https://fonts.googleapis.com/icon?family=Material+Icons')!!}" rel="stylesheet">
<!--Import materialize.css-->

<link type="text/css" rel="stylesheet" href="{!! asset('materialize/css/materialize.min.css')!!}"  media="screen,projection"/>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body id="login" class="home">
  <div id="navbar" class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Reset Password</div>

              <div class="panel-body">
                @if (session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                  </div>
                @endif

                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                          <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                        Send Password Reset Link
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
    <footer id="blades">
      <div class ="container">
        <div class="row">
          <div class="col s4 m4 l4 black-text">
            <img src="{!! asset('imgs/map-location.svg')!!}" height = 30 width = 30>
              Atlas - Remnant
          </div>
          <div class="col s2 m2 l2 offset-s4 offset-m4 offset-l4">
            <img src="{!! asset('imgs/icon1.png')!!}" height = 30 width = 30>
            <img src="{!! asset('imgs/icon2.png')!!}" height = 30 width = 30>
            <img src="{!! asset('imgs/icon3.png')!!}" height = 30 width = 30>
            <img src="{!! asset('imgs/icon4.png')!!}" height = 30 width = 30>
          </div>
        </div>
      </div>
      <div>
        <div class="container black-text">
          © 2018
        </div>
      </div>
    </footer>
  </body>
@endsection
