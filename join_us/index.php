<!DOCTYPE HTML>
<!-- Copyright (c) 2017 by Varun Sethu. All Rights Reserved. -->
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <meta charset="utf-8">
    <meta name="description:" content="A beta for the myNSB Android app">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- MDL stuff because im a lazy peice of tomato that cant be bothered doing this stuff by hand so I seek assistance from our lord and saviour Google Inc.
    :) -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- Stylesheets-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-light_blue.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="join_us/css/index.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="../favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../favicon-16x16.png" sizes="16x16">
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
    <link rel="manifest" href="../manifest.json">
    <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <style media="screen">
      .imp {
        color: #03A9F4;
      }
    </style>
    <title>Join Us | NSBHS ProgClub</title>
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
        <form action="join_us/php/signUp.php" method="post" id="sign_up_form">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="usernameDiv">
            <input class="mdl-textfield__input" type="email" id="username" name="email">
            <label class="mdl-textfield__label" for="username" id="usernameLabel">Email<span class="imp"> *</span></label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="passwordDiv">
            <input class="mdl-textfield__input" type="text" id="password" name="name">
            <label class="mdl-textfield__label" for="password" id="passwordLabel">Full Name<span class="imp"> *</span></label>
          </div>
          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1" id="remember">
            <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked name="setCookie">
            <span class="mdl-checkbox__label">Remember Me</span>
          </label>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" id="sign-up">Sign Up</button>
        </form>
      </div>
    </div>
  </body>
</html>
