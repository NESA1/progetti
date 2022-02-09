<?php
include "navbar.php";
if(isset($user->id)){
if(isset($_POST['submit'])){
    $autore = $user->username;
    $tag_autore = $user->discriminator;   
    $nome_server = $_POST['nome_server'];    
    $lingua_server = $_POST['lingua_server'];    
    $numero_canali_testuali = $_POST['numero_canali_testuali'];    
    $numero_canali_vocali = $_POST['numero_canali_vocali'];    
    $numero_categorie = $_POST['numero_categorie'];    
    $descrizione_server = $_POST['descrizione_server'];    
    $ruoli = $_POST['ruoli'];    
    $struttura_ruoli = $_POST['struttura_ruoli'];    
    $colori_ruoli = $_POST['colori_ruoli'];    
    $permessi_ruoli = $_POST['permessi_ruoli'];    
    $moderazione = $_POST['moderazione'];    
    $controllo_contenuti = $_POST['controllo_contenuti'];    
    
    $sql = "INSERT INTO server (autore, tag_autore, nome_server, lingua_server, numero_canali_testuali, numero_canali_vocali, numero_categorie, descrizione_server, ruoli, struttura_ruoli, colori_ruoli, permessi_ruoli, moderazione, controllo_contenuti)
    VALUES ('$autore', '$tag_autore', '$nome_server', '$lingua_server', '$numero_canali_testuali', '$numero_canali_vocali', '$numero_categorie', '$descrizione_server', '$ruoli', '$struttura_ruoli', '$colori_ruoli', '$permessi_ruoli', '$moderazione', '$controllo_contenuti')";
    
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
    $nome_server = "";
    $lingua_server = "";
    $numero_canali_testuali = "";
    $numero_canali_vocali = "";
    $numero_categorie = "";
    $descrizione_server = "";
    $_POST['ruoli'] = "";
    $struttura_ruoli = "";
    $colori_ruoli = "";
    $permessi_ruoli = "";
    $moderazione = "";
    $moderazione = "";
    $controllo_contenuti = "";
    } else {
    echo 'errore';
    echo $sql;
    }
    }
?>
<center>
    <!--<input type="" id="radio1" name="aperto" checked="checked"><label for="radio1">Aperto</label>-->
    <img src="images/server.png" class="img-fluid" alt="Responsive image">
    <h1>CREAZIONE SERVER DISCORD</h1>
    <h3 style="color: #808080">Compila il seguente modulo</h3>
    <h2 style="color: #C4183C">Ci raccomandiamo di entrare nel nostro server discord prima di procedere, <a href="info.php">leggi qua</a></h2>
    <br>
    <br>
    <br>
    <hr>
    <form class="" method="POST" action="server_discord.php">
                    <h2>Dettagli Generali</h2>
                    <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="form1-name" placeholder="Nome Server" name="nome_server" required>
                    </div>
                    <hr>
                    <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="form1-name" placeholder="Lingua Server" name="lingua_server" required>
                    </div>
                    <hr>
                    <div class="form-group col-md-6">
                    <input type="number" class="form-control" id="form1-name" placeholder="Numero canali testuali" name="numero_canali_testuali" required>
                    </div>
                    <hr>
                    <div class="form-group col-md-6">
                    <input type="number" class="form-control" id="form1-name" placeholder="Numero canali vocali" name="numero_canali_vocali" required>
                    </div>
                    <hr>
                    <div class="form-group col-md-6">
                    <input type="number" class="form-control" id="form1-name" placeholder="Numero categorie" name="numero_categorie" required>
                    </div>
                    <hr>
                    <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="form1-name" placeholder="Descrizione server" name="descrizione_server" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <h2>Dettagli ruoli</h2>
                    <div class="form-group col-md-6">
                    <label for="exampleFormControlTextarea1">Elenca i ruoli che vuoi inserire nel server</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ruoli" required></textarea>
                    </div>
                    <hr>
                    <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="form1-name" placeholder="Struttura del ruolo. EX. ⌊⚙️⌉ruolo" name="struttura_ruoli" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="exampleFormControlTextarea1">Elenca i colori che vuoi assegnare ai ruoli</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="colori_ruoli" required></textarea>
                    </div>
                    <hr>
                    <div class="form-group col-md-6">
                    <label for="exampleFormControlTextarea1">Elenca i permessi che vuoi assegnare ai ruoli</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="permessi_ruoli" required></textarea>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <h2>Sicurezza</h2>
                    <div class="col-md-6 pl-0 custom-dropdown-example">
                    <fieldset>
                    <label for="exampleFormControlTextarea1" >Seleziona il tipo di sicurezza</label>
                    <select class="custom-select w-100" name="moderazione" required>
                    <option value="nessuno">Nessuno</option>
                    <option value="basso">Basso</option>
                    <option value="medio">Medio</option>
                    <option value="alto">Alto</option>
                    <option value="massimo">Al Massimo</option>
                    </select>
                    </fieldset>
                    <br>
                    <hr>
                    <div class="custom-controls-example col-md-4 col-sm-4 col-xs-12">
                    </div>
                    <fieldset>
                    <label for="exampleFormControlTextarea1">Seleziona la sicurezza per i controlli contenuti</label>
                    <select class="custom-select w-100" name="controllo_contenuti" required>
                    <option value="Non controllare i contenuti.">Non controllare i contenuti.</option>
                    <option value="Controlla i contenuti dai membri senza ruolo">Controlla i contenuti dai membri senza ruolo.</option>
                    <option value="Controlla i contenuti di tutti i membri">Controlla i contenuti di tutti i membri</option>
                    </select>
                    </fieldset>    
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <hr>
                    <h2 style="color:tomato">VIP</h2>
                    <br>
                    <hr>
                    <fieldset disabled="">
                    <div class="form-group col-md-2">
                    <div class="custom-control custom-toggle d-block my-2">
                    <input type="checkbox" id="customToggle1" name="customToggle1" class="custom-control-input" required>
                    <label class="custom-control-label" for="customToggle1">Backup server DISCORD</label>
                    </fieldset>
                    <br>
                    <hr>
                    <fieldset disabled="">
                    <div class="form-group col-md-2">
                    <div class="custom-control custom-toggle d-block my-2">
                    <input type="checkbox" id="customToggle1" name="customToggle1" class="custom-control-input" required>
                    <label class="custom-control-label" for="customToggle1">Ottenimento ip dei membri</label>
                    </fieldset>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-dark">Invia</button>
                    </div>

    </form>
</center>
<?php 
    } else {
    echo '<center><h1>Hey utente! Prima di procedere devi accedere al tuo account discord!</h1></center>';
    }
?>