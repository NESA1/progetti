<?php
include "navbar.php";
?>
<center>
    <h1>Discord Strument</h1>
    <br>
    <img class="img-fluid" src="images/banner_1920x500.png">
    <br>
    <hr>
    <h3>Ciao <?php if(isset($user->username)) {echo $user->username; } else echo 'utente'; ?>!</h3>
    <br>
    <a href="https://discord.gg/bT8G2uX8x6" type="button" class="btn btn-outline-primary">Discord <i class="bi bi-discord"></i></a>
</center>