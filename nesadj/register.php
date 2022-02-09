<?php 
include "navbar.php";

if (isset($_POST['submit'])) {
	$ip = $_SERVER['REMOTE_ADDR'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
	$email = $_POST['email'];
	$password = md5(trim($_POST['password']));

	if ($password) {
		$sql = "SELECT * FROM utenti WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
		$sql = "INSERT INTO utenti (nome, cognome, email, password, ip)
					VALUES ('$nome', '$cognome', '$email', '$password', '$ip')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fa fa-check"></i> <strong>Perfetto!</strong> Account Creato!
            </div>';
exit;
				$nome = "";
				$cognome = "";
				$email = "";
				$_POST['password'] = "";
				$ip = "";
				
			} else {
				echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="fa fa-exclamation-circle"></i> <strong>On no!</strong> Qualcosa è andato storto!
            </div>';
            exit;
			}
		} else {
			echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <i class="fa fa-exclamation-circle"></i> <strong>On no!</strong> Questa email è già in uso!
        </div>
        <center>
        <a href="login.php" type="button" class="btn btn-outline-info">Ritenta</a>
        </center>';
        exit;
		}
		
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
    <h1>Benvenuto!</h1>
    <p>Crea un account.</p>
    </div>
    <form method= "POST" action="register.php" id="myFormd">
        
    <label for="form1-name" class="col-form-label">Nome</label>
        <input type="text" class="form-control" id="form1-name" placeholder="Nome" name="nome" required>
        <br>
        <label for="form1-name" class="col-form-label">Cognome</label>
        <input type="text" class="form-control" id="form1-name" placeholder="cognome" name="cognome" required>
        <br>
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