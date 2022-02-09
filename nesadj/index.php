<?php
include "navbar.php";
?>



<!-- Welcome Section -->
<div class="welcome d-flex justify-content-center flex-column">
    <div class="inner-wrapper mt-auto mb-auto">
        <img src="images/logo.png" alt="Shard" class="shard">
        <h1 class="slide-in"><?php echo $prog ?></h1>
        <p class="slide-in">Una migliore organizzazione.</p>
        <div class="action-links slide-in">
<?php
function is_device() {

    $user_agent = $_SERVER["HTTP_USER_AGENT"];
    
    $device = array("iPhone", "Android", "Windows Phone", "BlackBerry", "iPod");
    
    foreach ($device as $value) {
    
    if (strpos($user_agent, $value) !== false) {
    
    return true;
    
    }
    
    }
    
    return false;
    
    }
    
    
    
    if (is_device()) {
    
echo '  <a href="https://designrevision.com/downloads/shards" class="btn btn-primary btn-pill align-self-center mr-2"><i class="fa fa-download mr-1"></i>Scarica ora</a>
        <a href="#info"  class="btn btn-outline-light btn-pill align-self-center">Learn More</a>';
    
    } else {
    
    echo '<a href="#info"  class="btn btn-outline-light btn-pill align-self-center">Learn More</a>';
    
    }
?>
        </div>
    </div>
    </div>
    
    
        <hr>
        <div>
            <div class="slide-in">
        <div class="page-section" id="info">
            <center>
                <h2>INFO</h1>
            </center>
        <br>
        <?php
         
function is_device() {

    $user_agent = $_SERVER["HTTP_USER_AGENT"];
    
    $device = array("iPhone", "Android", "Windows Phone", "BlackBerry", "iPod");
    
    foreach ($device as $value) {
    
    if (strpos($user_agent, $value) !== false) {
    
    return true;
    
    }
    
    }
    
    return false;
    
    }
    $uno = Ogni account ed ogni evento viene analizzato da dei professionisti, quindi non c'è bisogno che ti preoccupi di questo...
    echo $uno;
    
    if (is_device()) {
    
echo '  <a href="https://designrevision.com/downloads/shards" class="btn btn-primary btn-pill align-self-center mr-2"><i class="fa fa-download mr-1"></i>Scarica ora</a>
        <a href="#info"  class="btn btn-outline-light btn-pill align-self-center">Learn More</a>';
    
    } else {
    
    echo '<a href="#info"  class="btn btn-outline-light btn-pill align-self-center">Learn More</a>';
    
    }
?>
        <div id="cards" class="container mb-2" style="padding-bottom: 1px">
        
            <div class="example col-md-12 ml-auto mr-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="images/sicurezzamess.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Sicurezza Generale</h4>
                                <p class="card-text">Ogni account ed ogni evento viene analizzato da dei professionisti, quindi non c'è bisogno che ti preoccupi di questo...</p>
                               <!-- <a href="#" class="btn btn-primary">Read More</a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 sm-hidden">
                        <div class="card">
                            <img class="card-img-top" src="images/sicurezzautenti.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Sicurezza Account</h4>
                                <p class="card-text">La tua password non la può vedere assolutamente nessuno, nemmeno io🤷‍♂️. Solo tu conosci la tua password e sei l'unico a poter cambiarla. Ogni volta che viene eseguito l'accesso al tuo account ti verrà inviata un email, quindi sei sempre aggiornato dello stato del tuo account...</p>
                                <!--<a href="#" class="btn btn-primary">Read More</a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 sm-hidden">
                        <div class="card">
                            <img class="card-img-top" src="images/chiave.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Accesibilità</h4>
                                <p class="card-text">Per avere accesso ad alcune pagine ed alcune azioni bisogna avere un account, <a href="register.php">che aspetti a farlo?</a></p>
                                <!--<a href="#" class="btn btn-primary">Read More</a>-->
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                
                </div>
            </div>
        </div>
    