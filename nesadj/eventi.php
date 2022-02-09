<?php
include "navbar.php";
ob_start();
$id = $row['nome'];
echo $id;
if(isset($_POST['submit'])){
  $sql = "DELETE FROM eventi WHERE id_evento= '$id'";  
      $result = mysqli_query($conn, $sql);
      if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result);
      } else {
          header("location: index.php");
      }
}
$result = mysqli_query($conn,"SELECT * FROM eventi");
//if(isset($row['id_evento'])){
while($row = mysqli_fetch_array($result))
{
echo '<center> <div class="container px-4 py-5" id="custom-cards">

<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
  <div class="row" style="margin: 0 auto;">
    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="height: 200px">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
        <h2 style="color: #E9ECEF">' . $row['nome_evento'] .'</h2>
        <p style="color: #E9ECEF">' . $row['note'] .'</p>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
          </li>
          <button type="button" class="btn btn-dark mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="' . $row['luogo'] .'"><i class="bi bi-geo-alt" style="font-size: 2rem;"></i></button>
          </li>
          
          
          <button type="button" class="btn btn-dark mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="' . $row['data'] .'"><i class="bi bi-calendar" style="font-size: 2rem;"></i></button>
          
        </li>
        
        <button type="button" class="btn btn-dark mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="' . $row['nome'] .'&nbsp;' . $row['cognome']. '"><i class="bi bi-person" style="font-size: 2rem;"></i></button>
        </ul>
        <form method="POST" action="eventi.php">
        <input type="submit" class="btn btn-pill btn-danger" value="cancella" name="submit">
        </form>
        </div>
    </div>
  </div>
  </center>';
}
    //  } else {
 //       echo '<center><h1>Non ci sono eventi da visualizzare</h1></center>';
 //     }
mysqli_close($conn);
ob_end_flush();
?>


     

      <!-- CSS -------------------------------------------->
      <style>
  .b-example-divider {
  height: 3rem;
  background-color: rgba(0, 0, 0, .1);
  border: solid rgba(0, 0, 0, .15);
  border-width: 1px 0;
  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.bi {
  vertical-align: -.125em;
  fill: currentColor;
}

.feature-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 4rem;
  height: 4rem;
  margin-bottom: 1rem;
  font-size: 2rem;
  color: #E9ECEF;
  border-radius: .75rem;
}

.icon-link {
  display: inline-flex;
  align-items: center;
}
.icon-link > .bi {
  margin-top: .125rem;
  margin-left: .125rem;
  transition: transform .25s ease-in-out;
  fill: currentColor;
}
.icon-link:hover > .bi {
  transform: translate(.25rem);
}

.icon-square {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  font-size: 1.5rem;
  border-radius: .75rem;
}

.rounded-4 { border-radius: .5rem; }
.rounded-5 { border-radius: 1rem; }

.text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
.text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
.text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

.card-cover {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

</style>
