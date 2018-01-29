<!DOCTYPE html>
  <html>

      <head>

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

      <body class="shop">
        <div id="navbar">
          <nav role="navigation">
            <div class="nav-wrapper container">
              <a id="logo" href="#" class="brand-logo"><img src="../imgs/untitled.png"></a>
              <ul class="right hide-on-med-and-down">
                <li><a id="text" href="schnee.html">Home</a></li>
                <li><a id="text" href="shop.html">Products</a></li>
                <li><a id="text" href="{!! asset('login')!!}">Login</a></li>
                <li><a id="text" href="contact-us">Contact</a></li>
              </ul>
            </div>
          </nav>
        </div>

      <h1 class="header center">Buy Dust!</h1>
      <div class="row center">
        <h4 id="subtitle_shop">Quality. Affordability. Trust.</h4>

      <div id="product_cards">
        <div class="container" id="product_cards">
          <div class="row" id="parallax1">
            <div class="col s12 m6 l3">
              <div id="card1">
                <div class="card">
                  <div class="card-image">
                    <img src="../imgs/fire.png">
                    <span class="card-title">Burn Dust</span>
                  </div>
                  <div class="card_content">
                    <p>L$500</p>
                  </div>
                  <div class="card_action">
                    <a href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>

            <div id="product_cards">
              <div class="col s12 m6 l3">
                <div class="card">
                  <div class="card-image">
                    <img src="../imgs/ice.png">
                    <span class="card-title">Ice Dust</span>
                  </div>
                  <div class="card_content">
                    <p>L$500</p>
                  </div>
                  <div class="card_action">
                    <a href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
            <div id="product_cards">
              <div class="col s12 m6 l3">
                <div id="card1">
                  <div class="card">
                    <div class="card-image">
                      <img src="../imgs/earth.png">
                      <span class="card-title">Shock Dust</span>
                    </div>
                    <div class="card_content">
                      <p>L$500</p>
                    </div>
                    <div class="card_action">
                      <a href="#">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div id="product_cards">
                <div class="col s12 m6 l3">
                  <div class="card">
                    <div class="card-image">
                      <img src="../imgs/wind.png">
                      <span class="card-title">Wind Dust</span>
                    </div>
                    <div class="card_content">
                      <p>L$500</p>
                    </div>
                    <div class="card_action">
                      <a href="#">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </section>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <footer>
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
    </footer>

  </body>
</html>
