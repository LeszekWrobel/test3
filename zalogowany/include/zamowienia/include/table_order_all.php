<?php
	require_once "../include/connect.php";
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

		if ($polaczenie->connect_errno!=0)
		{
			echo "Error: ".$polaczenie->connect_errno;
		}
		else
		{
?>
			<div class="order_form_grid">
<?php 	echo '<div class="item1"><b>KOD</b></div>';
				echo '<div class="dimension_y"><b>KLIENT</b></div>';
				echo '<div class="form"><b>WZÓR</b></div>';
				echo '<div class="raw_material"><b>Nakład</b></div>';
				echo '<div class="number_of_teeth"><b>Materiał</b></div>';
				echo '<div class="uzytkow"><b>Szerokość</b></div>';
				echo '<div class="reps"><b>Dł.mat. rzeczywista</b></div>';
				echo '<div class="termin_realizacji"><b>Termin realizacji</b></div>';
				echo '<div class="informacje_dodatkowe"><b>Informacje dodatkowe</b></div>';
				$a=$_SESSION['search_kod_karty_prod'];// zmienne z wyszukiwarki
				$b=$_SESSION['search_nazwa_wytw'];
				$c=$_SESSION['search_nazwa_wzoru'];
				$d=$_SESSION['search_kod_ean'];
				$rezultat =@$polaczenie->query("SELECT * FROM karty_produkcji WHERE kod_karty_prod LIKE '%$a%' AND nazwa_wytw LIKE '%$b%' AND nazwa_wzoru LIKE '%$c%' AND kod_ean LIKE '%$d%' ORDER BY termin_realizacji DESC");
				//$rezultat = @$polaczenie->query("SELECT * FROM karty_produkcji ORDER BY termin_realizacji DESC"); // szukamy w bazie wykrojnika o id - kod_karty_prod,nazwa_wytw,nazwa_wzoru,ilosc_do_realizacji,material,zalecana_szer_mat,dlugosc_materialu,radius
				while ($wiersz = $rezultat->fetch_assoc())	//tworzymy tabele zmiennych z bazy
					{
						echo '<a role="button" class="btn btn-link" data-toggle="modal"  style="background-color: rgb(216, 254, 214)" data-target="#'.$wiersz['id'].'">';
							echo '<div class="kod_karty_prod">'; //btn-rgb(216, 254, 214)
								include 'include/color_order_date.php'; //koloraowanie zamówien w/g data
							echo'</div>	</a>';
					// echo'	<a class="btn btn-link" href="?menuadmin=podgl_edycja_karta_produkcji&id='.$wiersz['id'].'&zmienne=restart" role="button" style="background-color: rgb(216, 254, 214)">';
					// 		echo '<div class="kod_karty_prod">'; //btn-rgb(216, 254, 214)
					// 			include 'include/color_order_date.php'; //koloraowanie zamówien w/g data
					// 		echo'</div></a>';
						echo '<div class="nazwa_wytw"> '.$wiersz['nazwa_wytw'].'</div>';
						echo '<div class="nazwa_wzoru"> '.$wiersz['nazwa_wzoru'].'</div>';
						echo '<div class="ilosc_do_realizacji"> '.$wiersz['ilosc_do_realizacji'].'</div>';
						echo '<div class="material"> '.$wiersz['material'].'</div>';
						echo '<div class="zalecana_szer_mat"> '.$wiersz['zalecana_szer_mat'].'</div>';
						echo '<div class="rzeczywista_ilosc_mat"> '.$wiersz['rzeczywista_ilosc_mat'].'</div>';
						echo '<div class="termin_realizacji"> '.$wiersz['termin_realizacji'].'</div>';
						echo '<div class="uwagi"> '.$wiersz['uwagi'].'</div>';
						include 'include/karty_produkcji/modal/modal_karta_produkcji.php';
					}

?>
			</div>
<?php	}
	$polaczenie->close();
?>
<!--  modal -->
<!-- Large modal -->
<?php echo'<div class="modal fade bd-example-modal-lg" id="'.$wiersz['id'].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">';?>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <?php //`include 'include\ini_session_variables.php'; ?>

      ...
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLabel">
          <?php //echo $wiersz['nazwa_wytw']; ?>
          Podgląd karty produkcji KOD:
          <?php
          echo $wiersz['kod_karty_prod'].' oraz id = '.$wiersz['id'];
          ?>
          </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <?php //echo'</div></a>'; ?>

      </div>
      <?php
      //$_GET['id'] = $wiersz['id'];
  //  $_GET['zmienne'] = 'restart';
      // include 'include/karta_produkcji/produktion_card.php';

       ?>

...

      <div class="modal-body">
        <?php
        // echo '<div class="nazwa_wytw"> '.$wiersz['nazwa_wytw'].'</div>';
        // echo '<div class="nazwa_wzoru"> '.$wiersz['nazwa_wzoru'].'</div>';
 ?>
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
<h4> <b>Jakie dane w podglądzie ?</b></h4>
            <?php echo'<img src="../img/graphics/'.$wiersz['grafika'].'" class="img-fluid" alt="">';  ?>

          </div>

            <!-- <div class="col-md-4">.col-md-4</div>
            <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div> -->
          </div>
          <!-- <div class="row">
            <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
            <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
          </div> -->
          <div class="row">
            <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
          </div>
          <div class="row">
            <div class="col-sm-9">
              Level 1: .col-sm-9
              <div class="row">
                <div class="col-8 col-sm-6">
                  Level 2: .col-8 .col-sm-6
                </div>
                <div class="col-4 col-sm-6">
                  Level 2: .col-4 .col-sm-6
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

      ...
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
        <?php echo' <a class="btn btn-primary" href="?menuadmin=podgl_edycja_karta_produkcji&id='.$wiersz['id'].'&zmienne=restart" role="button">Edytuj</a> ';?>

        <!-- <button type="button" class="btn btn-primary">Edytuj</button> -->
      </div>
    </div>
  </div>
</div>
