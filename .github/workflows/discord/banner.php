<?php
    include "navbar.php";
    if(isset($user->id)){
    if(isset($_POST['submit'])){
    $autore = $user->username;
    $tag_autore = $user->discriminator;
    $link = $_POST['link'];    
    $descrizione = $_POST['descrizione'];    
    
    $sql = "INSERT INTO banner (autore, tag_autore, link, descrizione)
    VALUES ('$autore', '$tag_autore', '$link', '$descrizione')";
    
    $result = mysqli_query($conn, $sql);
    if ($result) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">x</span>
    </button>
    <i class="fa fa-check"></i>
    <strong>SI!</strong> Operazione riuscita!
    </div>';
    exit;

    $autore = "";
    $tag_autore = "";
    $link = "";
    $descrizione = "";
    } else {
    echo 'errore';
    echo $sql;
    }
    }
?>

<center>
    <hr>
    <form method="POST" action="banner.php">
    <h1>Creazione Banner Discord</h1>
    <img src="images/banner.png" class="img-fluid" alt="banner" width="500px">
    <hr>
    <h2>Ti faremo delle piccole domande...</h2>
    <h2 style="color: #C4183C">Ci raccomandiamo di entrare nel nostro server discord prima di procedere, <a href="info.php">leggi qua</a></h2>
    <br>
    <br>
    <hr>
    <h5>Adesso ti diamo un link dove dovrai decidere una palette per il tuo banner, ecco il link: <a href="https://coolors.co/">https://coolors.co/</a></h5>
    <div class="form-group col-md-6">
    <input type="text" class="form-control" id="form1-name" placeholder="Incolla qua il link della palette" name="link" required>
    </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlTextarea1">Descrivici come vorresti il tuo banner</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descrizione" required></textarea>
    </div>
    <button type="submit" name="submit" value="submit" class="btn btn-dark">Invia</button>
    </form>
    
</center> 
<?php 
    } else {
    echo '<center><h1>Hey utente! Prima di procedere devi accedere al tuo account discord!</h1></center>';
    }
?>