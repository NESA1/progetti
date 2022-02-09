<?php 
include "navbar.php";

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM utenti WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);


    $_SESSION['id_utente'] = $row['id_utente'];
$_SESSION['nome'] = $row['nome'];
$_SESSION['cognome'] = $row['cognome'];
$_SESSION['email'] = $row['email'];
$_SESSION['data'] = $row['data'];
$_SESSION['ruolo'] = $row['ruolo'];
$_SESSION['ip'] = $row['ip'];



echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
<i class="fa fa-check"></i> <strong>Perfetto!</strong> Hai avuto accesso al tuo account!
</div>
<center>
<a type="button"href="index.php" class="btn btn-dark btn-pill">Torna alla home</a>
</center>';
exit;
	} else {
		echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fa fa-exclamation"></i> <strong>Oh no!</strong> Credenziali invalide!
            </div>
            <center>
            <a href="login.php" type="button" class="btn btn-outline-info">Ritenta</a>
            </center>';
exit;
	}
}
ob_end_flush();

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
    <h1>Bentornato!</h1>
    <p>Accedi al tuo account.</p>
    </div>
    <form method= "POST" action="login.php" id="myFormd">
        <label for="form1-name" class="col-form-label">Email</label>
        <input type="text" class="form-control" id="form1-name" placeholder="Email" name="email" required>
        <br>
        <label for="form1-name" class="col-form-label">Password</label>
        <div class="input-group with-addon-icon-right">
        <input type="password" class="form-control" id="form1-email" placeholder="Password" name="password" required>
        <span class="input-group-addon">
        <i class="fa fa-lock"></i>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary btn-pill" value="Submit" name="submit">&nbsp;&nbsp;Invia&nbsp;&nbsp;</button>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="reset" type="reset" onclick="resetForm('myFormId'); return false;" class="btn btn-outline-danger btn-pill"></button>
    
    </form>
        </div>
</center>