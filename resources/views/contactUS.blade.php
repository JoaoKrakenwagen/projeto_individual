<!DOCTYPE html>

<html id="contact">

  <head class=Header>
    <meta charset="utf-8">

    <title>Schnee Dust Company</title>
    <link rel="stylesheet" type="text/css" href="../materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../css/schnee.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  </head>

  <body>
    <div id="navbar">
      <nav role="navigation">
        <div class="nav-wrapper container">
          <a id="logo" href="#" class="brand-logo"><img src="../imgs/untitled.png"></a>
          <ul class="right hide-on-med-and-down">
            <li><a id="text" href="schnee.html">Home
            <li><a id="text" href="shop.html">Products</a></li>
            <li><a id="text" href="{!! asset('login')!!}">Login</a></li>
            <li><a id="text" href="contact.html">Contact</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="container">
    <h1 id="contact-title">Contact US Form</h1>

    @if(Session::has('success'))
       <div class="alert alert-success">
         {{ Session::get('success') }}
       </div>
    @endif

    {!! Form::open(['route'=>'contactus.store']) !!}

    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('Name:') !!}
    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
    <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('Email:') !!}
    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
    <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>

    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
    {!! Form::label('Message:') !!}
    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
    <span class="text-danger">{{ $errors->first('message') }}</span>
    </div>

    <div id="contact-button" class="form-group">
    <button class="btn btn-success">Contact US!</button>
    </div>

    {!! Form::close() !!}

    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <footer>
      <div id="contact_footer">
        <div class ="container">
          <div class="row">
            <div class="col s12 m6 l3 black-text">
              <img src="../imgs/map-location.svg" height = 30 width = 30>
              Atlas - Remnant
            </div>
            <div class="col s2 m2 l2 offset-s4 offset-m4 offset-l4">
              <img src="../imgs/icon1.png" height = 30 width = 30>
              <img src="../imgs/icon2.png" height = 30 width = 30>
              <img src="../imgs/icon3.png" height = 30 width = 30>
              <img src="../imgs/icon4.png" height = 30 width = 30>
            </div>
          </div>
        </div>
        <div>
          <div class="container black-text">
             © 2018
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
