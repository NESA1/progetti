<?php 
include "navbar.php";

if (isset($_POST['submit'])) {
    $nome = $_SESSION['nome'];
    $cognome = $_SESSION['cognome'];
	$id = $_SESSION['id_utente'];
    $data = $_POST['data'];
    $luogo = $_POST['luogo'];
    $titolo = $_POST['nome_evento'];
    $note = $_POST['note'];
      
    $dataFormattata = date('Y-m-d',strtotime($data));
       
$sql = "INSERT INTO eventi (nome, cognome, id_utente, data, luogo, nome_evento, note)
VALUES ('$nome', '$cognome', '$id', '$dataFormattata', '$luogo', '$titolo', '$note')";
$result = mysqli_query($conn, $sql);
//echo $sql;
if ($result) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <i class="fa fa-check"></i> <strong>Perfetto!</strong> Evento Creato!
</div>';
$nome = "";
$cognome = "";
$data = "";
$dataFormattata = "";
$id = "";
$luogo = "";
$titolo = "";
$note = "";

} else {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <i class="fa fa-exclamation-circle"></i> <strong>On no!</strong> Qualcosa è andato storto!
</div>';
exit;
}

}
?>
<script type="text/javascript">
   function resetForm(myFormId)
   {
       var myForm = document.getElementById(myFormId);

       for (var i = 0; i < myForm.elements.length; i++)
       {
           if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type)
           {
               myForm.elements[i].checked = false;
               myForm.elements[i].value = '';
               myForm.elements[i].selectedIndex = 0;
           }
       }
   }
</script>
<center>
    <div class="form-group col-md-6">
    <div class="slide-in">
    <h1>Hey!👋</h1>
    <p>Crea un evento.</p>
    </div>
    <form method= "POST" action="crea_evento.php" id="myFormd">
        <input type="hidden" class="form-control" id="form1-name" placeholder="Nome" name="nome" value="<?php $_SESSION['nome']; ?>">
        <input type="hidden" class="form-control" id="form1-name" placeholder="Nome" name="nome" value="<?php $_SESSION['cognome']; ?>">
        <input type="hidden" class="form-control" id="form1-name" placeholder="Nome" name="nome" value="<?php $_SESSION['id_utente']; ?>">
            
        <label for="form1-name" class="col-form-label">Nome Evento</label>
        <input type="text" class="form-control" id="form1-name" placeholder="Nome Evento" name="nome_evento" required>
        <br>
        <div class="form-group">
        <label for="datepicker-example-1">Data Evento</label>
        <div class="input-group with-addon-icon-left">
        <input type="text" class="form-control" name="data" id="datepicker-example-1" required>
        <span class="input-group-addon">
        <i class="fa fa-calendar"></i>
        </span>
        </div>
        </div>
        <br>
        <label for="form1-name" class="col-form-label">Luogo</label>
        <input type="text" class="form-control" id="form1-name" placeholder="luogo" name="luogo" required>
        <br>
        <label for="form1-name" class="col-form-label">Note</label>
        <input type="text" class="form-control" id="form1-email" placeholder="note" name="note" required>
        <br>
        <button type="submit" class="btn btn-outline-primary btn-pill" value="Submit" name="submit">&nbsp;&nbsp;Invia&nbsp;&nbsp;</button>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="reset" type="reset" onclick="resetForm('myFormId'); return false;" class="btn btn-outline-danger btn-pill"></button>
    
    </form>
        </div>
</center>