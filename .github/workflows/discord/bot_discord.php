<?php
include "navbar.php";
if(isset($user->id)){
?>
<center>
    <div><h1>Creazione Bot Discord</h1>
    <h5>Adesso ti faremo delle brevi domande per la creazione del tuo bot discord</h5>
    <hr>
    <h6>Info</h6>
    <h7>Il bot è programmato in python, tutto ciò è riservato ai vip, se vuoi diventare un vip unisciti al nostro discord</h7>
    <br>
    <br>
    <br>
    <hr>
    <div class="form-group col-md-6">
    <input type="text" class="form-control" id="form1-name" placeholder="Nome Bot" disabled="">
    <hr>
    <input type="text" class="form-control" id="form1-name" placeholder="Prefisso Bot" disabled="">
    
    <hr>
    <input type="text" class="form-control" id="form1-name" placeholder="Comandi Bot" disabled="">
    </div>
</center>
<?php 
    } else {
    echo '<center><h1>Hey utente! Prima di procedere devi accedere al tuo account discord!</h1></center>';
    }
?>