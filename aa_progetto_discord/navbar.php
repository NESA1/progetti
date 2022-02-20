<?php
//include "_conf.php";
session_start(); 
ob_start();
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>DISCORD STRUMENT</title>
  <meta name="description" content="A free and modern UI toolkit for web makers based on the popular Bootstrap 4 framework.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/shards.min.css?v=2.0.1">
  <link rel="stylesheet" href="css/shards-demo.min.css?v=2.0.1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/6e7f43a4f8.js" crossorigin="anonymous"></script>
  <style>
    nav{
    background: #181925 !important; 
    }
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    }

    ul {
    list-style: none;
    }
    .context-menu { 
    position: absolute; 
    } 
    .menu {
    display: flex;
    flex-direction: column;
    background-color: #E9ECEF;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgb(64 64 64 / 5%);
    padding: 10px 0;
    }
    .menu > li > a {
    font: inherit;
    border: 0;
    padding: 10px 30px 10px 15px;
    width: 100%;
    display: flex;
    align-items: center;
    position: relative;
    text-decoration: unset;
    color: #000;
    font-weight: 500;
    transition: 0.5s linear;
    -webkit-transition: 0.5s linear;
    -moz-transition: 0.5s linear;
    -ms-transition: 0.5s linear;
    -o-transition: 0.5s linear;
    }
    .menu > li > a:hover {
    background:#f1f3f7;
    color: #4b00ff;
    }
    .menu > li > a > i {
    padding-right: 10px;
    }
    .menu > li.trash > a:hover {
    color: red;
    }
    ul {
    list-style-type: none;
    }
    a {
    color: white;
    text-decoration: none;
    }
    a:hover {
    text-decoration: underline;
    }
    .logo a:hover {
    text-decoration: none;
    }
    .menu li {
    font-size: 16px;
    padding: 15px 5px;
    white-space: nowrap;
    }
    .logo a,
    .toggle a {
    font-size: 20px;
    }
    .button.secondary {
    border-bottom: 1px #444 solid;
    }
    /* Mobile menu */
    .menu {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    }
    .toggle {
    order: 1;
    }
    .item.button {
    order: 2;
    }
    .item {
    width: 100%;
    text-align: center;
    order: 3;
    display: none;
    }
    .item.active {
    display: block;
    background-color: rgb(192, 79, 79);
    border-radius: 4px;
    }
    /* Tablet menu */
    @media all and (min-width: 600px) {
    .menu {
    justify-content: center;
    }
    .logo {
    flex: 1;
    }
    .toggle {
    flex: 1;
    text-align: right;
    }
    .item.button {
    width: auto;
    order: 1;
    display: block;
    }
    .toggle {
    order: 2;
    }
    .button.secondary {
    border: 0;
    }
    .button a {
    padding: 7.5px 15px;
    background: teal;
    border: 1px #006d6d solid;
    }
    .button.secondary a {
    background: transparent;
    }
    .button a:hover {
    text-decoration: none;
    }
    .button:not(.secondary) a:hover {
    background: #006d6d;
    border-color: #005959;
    }
    .button.secondary a:hover {
    color: #ddd;
    }
    }
    body{
    background: rgb(31,33,49);
    position: relative;
    }
    nav{  
    font-family: sans-serif;
    background: #181925 !important; 
    padding: 5px 20px;
    }

    /* Desktop menu */
    @media all and (min-width: 900px) {
    .item {
    display: block;
    width: auto;
    }
    .toggle {
    display: none;
    }
    .logo {
    order: 0;
    }
    .item {
    order: 1;
    }
    .button {
    order: 2;
    }
    .menu li {
    padding: 15px 10px;
    }
    .menu li.button {
    padding-right: 0;
    }
    }
    b{
    color: #DEDEDE;
    opacity: 50%;
    }
    h1{
    color: #F2F2F2;
    }
    h2{
    color: #F2F2F2;
    }
    h3{
    color: #F2F2F2;
    }
    h4{
    color: #F2F2F2;
    }
    h5{
    color: #F2F2F2;
    }
    h6{
    color: #F2F2F2;
    }
    p{
    color: #F2F2F2;
    }
    .space{
    width: 20%;
    height: 100%;
    }
    .body{
    position: absolute;
    left: 21%;  
    }
    .search{
    position: absolute;
    background: #2E304E;
    height: 26px;
    border: none;
    
    }
    @media all and (min-width: 900px) {
    .form-control{
    background: #2E304E;
    border: none;
    width: 20%;
    border-radius: 30px 30px 30px 30px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    color: #DEDEDE;
    }
    .form-control:focus{
    background: #2E304E;
    width: 25%;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    color: #DEDEDE;
    }
  }
    .bi-search{
    color: #DEDEDE;
    left: 21%;
    }
    .po{
    width: 100%;
    height: 100%;
    right: 100%;
    background: #000;  
    }
    @media all and (max-width: 900px) {
      .form-control{
    opacity: 0%;
    }
    .form-control:focus{
    opacity: 0%;
    }
  }
</style>
</head>
<nav class="navbar navbar-expand navbar-dark  mb-4">
  <div class="space">
  </div>  
  <a href="index.php"><img src="images/logo2.png" width="50px"></a>
  <a class="navbar-brand" href="index.php">Discord Element</a>
  <div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown-6">
  <input type="text" class="form-control" id="form1-name" placeholder="Cerca...">
  <p>&nbsp;
  </p>
  <a href="ricerca.php">
  <i class="bi bi-search" style="font-size: 1.5rem;"></i>
  </a>
  <ul class="navbar-nav mr-auto">
  <li class="nav-item active">
  <a class="nav-link" href="index.php">Home
  </a>
  </li>
  <li class="nav-item active">
  <a class="nav-link" href="index.php">Esplora
  </a>
  </li>
  <li class="item">
  <a class="nav-link" href="novità.php">Recenti</a>
  </li>
  </ul>  
  <ul class="navbar-nav">
  <li class="nav-item">
    <div class="po">
      <button type="button" class="btn" style="background: #181925;" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Esegui il login con discord">
        <i class="fa-solid fa-right-to-bracket fa-2xl" style="color: #F2F2F2;"></i>
      </div>
  </button>
  </li>
  </ul>
  </div>
</nav>
  
<!-- JavaScript -->
<div id="fb-root"></div>
<script>
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s);
js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1662270373824826";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/shards.min.js"></script>
<script src="js/demo.min.js"></script>
<?php
ob_end_flush();
?>
<div class="body">