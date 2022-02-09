<?php
include "navbar.php";
//  error_reporting(0);
?>
<center>
    <h1>DETTAGLI ACCOUNT</h1>
    <br>
    <hr>
    <h4>USERNAME: <?php echo $user->username; echo '#'; echo $user->discriminator; ?></h4>
    <br>
    <hr>
    <h4>ID: <?php echo $user->id; ?></h4>
    <br>
    <hr>
    <h4>NAZIONALITÀ: <?php echo $user->locale;?></h4>
    <br>
    <hr>
    <h4>FLAGS: <?php echo $user->flags;?></h4>
    <br>
    <hr>
    <h4>AVATAR: <?php echo $user->avatar;?></h4>
    <br>
    <hr>
    <h4>IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></h4>
    <br>
    <br>
    <br>
    <a type="button" href="logout.php" class="btn btn-outline-danger">Esci dall'account</a>
    <br>
    <br>
    <br>
    <hr>
</center>