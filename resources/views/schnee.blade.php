<!DOCTYPE html>
  <html>
    <head>

    <head class=Header>
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

    <body class="home">

    <div id="navbar">
      <nav role="navigation">
        <div class="nav-wrapper container">
          <a id="logo" href="#" class="brand-logo"><img src="{!! asset('imgs/Untitled.png')!!}"></a>
          <ul class="right hide-on-med-and-down">
            <li><a id="text" href="{!! asset('schnee.html')!!}">Home
            <li><a id="text" href="{!! asset('shop.html')!!}">Products</a></li>
            <li><a id="text" href="{!! asset('contact.html')!!}">Contact</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <section>
      <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <br><br>
            <h1 class="header center">Schnee Dust Company</h1>
            <div class="row center">
              <h4 id="subtitle" class="header col s12 light">Quality. Affordability. Trust.</h4>
            </div>
            <br><br>
          </div>
        </div>
        <div class="parallax"><img src="{!! asset('imgs/logo.png')!!}" alt="Unsplashed background img 1"></div>
      </div>

      <div id="cards">
        <div class="container" id="card1">
          <div class="row" id="parallax1">
            <div class="col s12 m6 l6">
              <div id="card1">
                <div class="card">
                  <div class="card-image">
                    <img src="{!! asset('imgs/profit.png')!!}">
                    <span class="card-title">Card Title</span>
                  </div>
                  <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="cards">
              <div class="row">
                <div class="col s12 m6 l6">
                  <div class="card">
                    <div class="card-image">
                      <img src="{!! asset('imgs/world.png')!!}">
                      <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information.
                      I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <h5 class="header col s12 light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat.</h5>
          </div>
        </div>
      </div>
      <div class="parallax"><img src="{!! asset('imgs/dust.png')!!}" alt="Unsplashed background img 2"></div>
    </div>

    <div class="container">
      <div class="section">

        <div class="row">
          <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h4>Contact Us</h4>
            <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
          </div>
        </div>

      </div>
    </div>

    <div class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <h5 class="header col s12 light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat.</h5>

          </div>
        </div>
      </div>
      <div class="parallax"><img src="{!! asset('imgs/flakes.png')!!}" alt="Unsplashed background img 3"></div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{!! asset('https://code.jquery.com/jquery-3.2.1.min.js')!!}"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js')!!}"></script>
    <script src="{!! asset('js/init.js')!!}"></script>

    <footer>
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
</html>
