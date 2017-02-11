<!DOCTYPE HTML>
<!-- Copyright (c) 2017 by Varun Sethu. All Rights Reserved. -->
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta charset="utf-8">
    <meta name="description:" content="A beta for the myNSB Android app">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- MDL stuff because im a lazy peice of shit that cant be bothered doing this stuff by hand so I seek assistance from our lord and saviour Google Inc.
    :) -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- Stylesheets-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-light_blue.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="join_us/css/index.css">
    <style media="screen">
      .imp {
        color: #03A9F4;
      }
    </style>
    <title>myNSBeta</title>
  </head>
  <body>
    <div class="everywhere">

    </div>
    <div class="header"></div>
    <div class="container">
      <div class="container-header">
        <div class="sign-in-text">
          <p class="text">Join Us</p>
        </div>
        <div class="aboutText">
          <p class="detail">It's free</p>
        </div>
      </div>
      <div class="sign-in_box">
        <form action="signUp.php" method="post" id="sign_up_form">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="usernameDiv">
            <input class="mdl-textfield__input" type="text" id="username" name="username">
            <label class="mdl-textfield__label" for="username" id="usernameLabel">Username<span class="imp"> *</span></label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="passwordDiv">
            <input class="mdl-textfield__input" type="password" id="password" name="password">
            <label class="mdl-textfield__label" for="password" id="passwordLabel">Password<span class="imp"> *</span></label>
          </div>
          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1" id="remember">
            <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked name="setCookie">
            <span class="mdl-checkbox__label">Remember Me</span>
          </label>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" id="sign-up">Sign Up</button>
        </form>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
        $('#sign_up_form').submit(function(){
            $('body').addClass('everywhereActive');

          return false;
    })
  });

  </script>
  </body>
</html>