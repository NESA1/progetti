<?php
include "_conf.php";
session_start(); 
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('max_execution_time', 300); //300 seconds = 5 minutes. In case if your CURL is slow and is loading too much (Can be IPv6 problem)

error_reporting(E_ALL);

define('OAUTH2_CLIENT_ID', '934575877386272808');
define('OAUTH2_CLIENT_SECRET', 'nRqAQ2zKx53sXR9eX8Ty-gdbhcanblQ7');

$authorizeURL = 'https://discord.com/api/oauth2/authorize';
$tokenURL = 'https://discord.com/api/oauth2/token';
$apiURLBase = 'https://discord.com/api/users/@me';
$revokeURL = 'https://discord.com/api/oauth2/token/revoke';

if(get('action') == 'logout') {
logout($revokeURL, array(
'token' => session('access_token'),
'token_type_hint' => 'access_token',
'client_id' => 934575877386272808,
'client_secret' => 'nRqAQ2zKx53sXR9eX8Ty-gdbhcanblQ7',
));
unset($_SESSION['access_token']);
header('Location: ' . $_SERVER['PHP_SELF']);
die();
}



// Start the login process by sending the user to Discord's authorization page
if(get('action') == 'login') {

$params = array(
'client_id' => 934575877386272808,
'redirect_uri' => 'http://localhost/discord/inserimento_db.php',
'response_type' => 'code',
'scope' => 'identify guilds'
);

  // Redirect the user to Discord's authorization page
  header('Location: https://discord.com/api/oauth2/authorize' . '?' . http_build_query($params));
  die();
}


// When Discord redirects the user back here, there will be a "code" and "state" parameter in the query string
if(get('code')) {

  // Exchange the auth code for a token
$token = apiRequest($tokenURL, array(
"grant_type" => "authorization_code",
'client_id' => 934575877386272808,
'client_secret' => 'nRqAQ2zKx53sXR9eX8Ty-gdbhcanblQ7',
'redirect_uri' => 'http://localhost/discord/inserimento_db.php',
'code' => get('code')
));
$logout_token = $token->access_token;
$_SESSION['access_token'] = $token->access_token;


header('Location: ' . $_SERVER['PHP_SELF']);
}




if(get('action') == 'logout') {
// This should logout you
logout($revokeURL, array(
'token' => session('access_token'),
'token_type_hint' => 'access_token',
'client_id' => 934575877386272808,
'client_secret' => 'nRqAQ2zKx53sXR9eX8Ty-gdbhcanblQ7',
));
unset($_SESSION['access_token']);
header('Location: ' . $_SERVER['PHP_SELF']);
die();
}

function apiRequest($url, $post=FALSE, $headers=array()) {
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$response = curl_exec($ch);


if($post)
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

$headers[] = 'Accept: application/json';

if(session('access_token'))
$headers[] = 'Authorization: Bearer ' . session('access_token');

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
return json_decode($response);
}

function logout($url, $data=array()) {
$ch = curl_init($url);
curl_setopt_array($ch, array(
CURLOPT_POST => TRUE,
CURLOPT_RETURNTRANSFER => TRUE,
CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded'),
CURLOPT_POSTFIELDS => http_build_query($data),
));
$response = curl_exec($ch);
return json_decode($response);
}

function get($key, $default=NULL) {
return array_key_exists($key, $_GET) ? $_GET[$key] : $default;
}

function session($key, $default=NULL) {
return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : $default;
}
//$username = $user->username
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
</head>
<style>
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
</style>
<script>
     document.onclick = hideMenu; 
       document.oncontextmenu = rightClick; 

        function hideMenu() { 
            document.getElementById("contextMenu") 
                    .style.display = "none" 
        } 

        function rightClick(e) { 
            e.preventDefault(); 

            if (document.getElementById("contextMenu") .style.display == "block"){ 
                hideMenu(); 
            }else{ 
                var menu = document.getElementById("contextMenu")      
                menu.style.display = 'block'; 
                menu.style.left = e.pageX + "px"; 
                menu.style.top = e.pageY + "px"; 
            } 
        } 
</script>
<div id="contextMenu" class="context-menu" style="display: none"> 
        <ul class="menu"> 
          <script>
            function copyToClipboard(text) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value = window.location.href;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
}
          </script>
            <li class="rename"><a href="javascript:history.go(-1)"><i class="bi bi-arrow-bar-left"></i> Torna alla pagina precedente</a></li> 
            <li class="link" onclick="copyToClipboard()"><a href="#"><i class="fa fa-link" aria-hidden="true"></i>Copia link della pagina</a></li> 
            <li class="copy"><a href="https://discord.gg/bT8G2uX8x6"><i class="bi bi-discord"></i></i>Entra nel Discord</a></li> 
            <li class="trash"><a href="https://www.youtube.com/channel/UC2uJTrxUDgCPUyUt5gXHqnA"><i class="bi bi-youtube"></i> Youtube</a></li> 
        </ul> 
    </div> 
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <a class="navbar-brand" href="#">DISCORD STRUMENT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-6" aria-controls="navbarNavDropdown-6" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown-6">
  <ul class="navbar-nav mr-auto">
  <li class="nav-item active">
  <a class="nav-link" href="index.php">Home
  </a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="novità.php">Novità</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="chi_sono.php">Chi sono</a>
  </li>
  <li class="nav-item dropdown show">
  <a class="nav-link dropdown-toggle" href="https://designrevision.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
  Servizi
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
  <a class="dropdown-item" href="server_discord.php">Server Discord</a>
  <a class="dropdown-item" href="bot_discord.php">Bot Discord</a>
  <a class="dropdown-item" href="banner.php">Banner account</a>
  </div>
  </li>
  <?php
  ?>
  </ul>  
  <ul class="navbar-nav">
  <li class="nav-item">
  <b><?php
  if(session('access_token')) {
  $user = apiRequest($apiURLBase);  
  echo '<a type="button" href="account.php" class="btn btn-light btn-pill"> '; echo $user->username; echo '#'; echo $user->discriminator; echo '</a>';
  } else {
  echo '<a type="button" href="?action=login" class="btn btn-light btn-pill">Login</a>';
  }
  ?></b>
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
<?php ob_end_flush();?>