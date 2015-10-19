<?php
/*
AirSafeMy - Malaysian Air API Monitoring App by Myhyazid
Copyright 2015 Myhyazid
Website : www.myhyazid.com
Email : admin@myhyazid.com
Template : Material Design Lite by google
        :   bootstrap
Data Source from Malaysian DOE Website
////////////////////////////////////////////
AirSafeMy by myhyazid
//////////////////////////////////////
*/
include("supercomp/KLSGBridge.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href='https://fonts.googleapis.com/css?family=Audiowide|Quicksand' rel='stylesheet' type='text/css'>
  <body>

<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">AirSafeMy - Malaysian API Monitoring App</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
<main class="mdl-layout__content">
    <div class="page-content">
    <div class="mdl-grid">
  <div class="mdl-cell mdl-cell--6-col jumbotron">
    <style>
        .demo-card-wide.mdl-card {
          width: 512px;
        }
        .demo-card-wide > .mdl-card__title {
          color: #fff;
          height: 176px;
          background-color: <?php echo apihealth($status);?>;
        }
        .demo-card-wide > .mdl-card__menu {
          color: #fff;
        }
        h2.mdl-card__title-text.aligncent {
            text-align: center;
            margin: auto;
            font-size: 90px;
        }
    </style>
<h2>Nearest Location :</h2>
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text aligncent"><?php echo $status[$hour];?></h2>
  </div>
  <div class="mdl-card__supporting-text">
    <B style="font-size: 20px;"><?php echo $status['area'];?> , <?php echo $status['1'];?></B>
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Get Started
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>
  </div>
  <div class="mdl-cell mdl-cell--6-col jumbotron">
<style>
.air {
font-family: 'Audiowide', cursive;
}
.airless {
    font-family: 'Quicksand', sans-serif;
}
</style>
<h2 class="air">Air<span><h2 class="airless">irSafeMy</h2></h2>
</div>
</div>

<br>
<div class="mdl-grid">
    <?php include("supercomp/indexbody.php");?>
</div>
    <!-- Colored FAB button -->
<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
  <i class="material-icons">add</i>
</button><!-- Your content goes here -->
    </div>
  </main>
</div>

<main class="mdl-layout__content">
    <div class="page-content">
    <br>
    <br>
    </div>
</main>
</body>
<?php include("supercomp/footer.php");?>