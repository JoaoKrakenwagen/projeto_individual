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

      <body class="contact">
        <div id="navbar">
          <nav role="navigation">
            <div class="nav-wrapper container">
              <a id="logo" href="#" class="brand-logo"><img src="../imgs/untitled.png"></a>
              <ul class="right hide-on-med-and-down">
                <li><a id="text" href="schnee.html">Home
                <li><a id="text" href="shop.html">Products</a></li>
                <li><a id="text" href="contact.html">Contact</a></li>
              </ul>
            </div>
          </nav>
        </div>

      <h1 class="header center">Leave us a Message</h1>
      <div class="row center">
        <h4 id="subtitle_shop">Quality. Affordability. Trust.</h4>
      </div>

    <form class="col s12">
      <div class="container">
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate">
            <label id="inputtext" for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label id="inputtext" for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label id="inputtext" for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label id="inputtext" for="textarea1">Message</label>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>



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
