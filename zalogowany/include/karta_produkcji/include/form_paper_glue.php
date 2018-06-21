<!--<form method="post" action="">-->
<div class="row">
  <div class="col-md-7">
    <div class="text-light bg-primary">Papir</div>
    <?php echo '<input type="text" name="paper" class="form-control" id="formGroupExampleInput" placeholder="'.$_SESSION['paper'].'">';    ?>
  </div>
  <div class="col-md-5">
    <div class="text-light bg-primary">Klej</div>
    <?php echo '<input type="text" class="form-control" id="formGroupExampleInput" name="glue" placeholder="'.$_SESSION['glue'].'">';    ?>
  </div>
</div>
<!-- nawój -->
<div id="direction_roll" class="mx-3 my-3">
  <div class="custom-control custom-radio">
    <input type="radio" id="customRadio1" name="direction_roll" value="a-0" class="custom-control-input">
    <label class="custom-control-label" for="customRadio1"><img src="include/karta_produkcji/nawoj_gif/a-0.gif" height="30px"></label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" id="customRadio2" name="direction_roll" value="a-90" class="custom-control-input">
    <label class="custom-control-label" for="customRadio2"><img src="include/karta_produkcji/nawoj_gif/a-90.gif" height="30px"></label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" id="customRadio3" name="direction_roll" value="a-180" class="custom-control-input">
    <label class="custom-control-label" for="customRadio3"><img src="include/karta_produkcji/nawoj_gif/a-180.gif" height="30px"></label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" id="customRadio4" name="direction_roll" value="a270" class="custom-control-input">
    <label class="custom-control-label" for="customRadio4"><img src="include/karta_produkcji/nawoj_gif/a-270.gif" height="30px"></label>
  </div><div class="custom-control custom-radio">
    <input type="radio" id="customRadio5" name="direction_roll" value="r-0" class="custom-control-input">
    <label class="custom-control-label" for="customRadio5"><img src="include/karta_produkcji/nawoj_gif/r-0.gif" height="30px"></label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" id="customRadio6" name="direction_roll" value="r-90" class="custom-control-input">
    <label class="custom-control-label" for="customRadio6"><img src="include/karta_produkcji/nawoj_gif/r-90.gif" height="30px"></label>
  </div><div class="custom-control custom-radio">
    <input type="radio" id="customRadio7" name="direction_roll" value="r-180" class="custom-control-input">
    <label class="custom-control-label" for="customRadio7"><img src="include/karta_produkcji/nawoj_gif/r-180.gif" height="30px"></label>
  </div>
  <div class="custom-control custom-radio">
    <input type="radio" id="customRadio8" name="direction_roll" value="r-270" class="custom-control-input">
    <label class="custom-control-label" for="customRadio8"><img src="include/karta_produkcji/nawoj_gif/r-270.gif" height="30px"></label>
</div>
</div>
<div class="row">
  <div class="col-md-7">
    <div class="text-light bg-primary">Ilość e/r</div>
    <?php echo '<input type="text" class="form-control" id="formGroupExampleInput" name="quantity_er"   placeholder=" '.$_SESSION['quantity_er'].'">';    ?>
  </div>
  <div class="col-md-5">
    <div class="text-light bg-primary">Tulejka</div>
    <?php echo '<input type="text" class="form-control" id="formGroupExampleInput" name="bush"  placeholder=" '.$_SESSION['bush'].'">';    ?>
  </div>
</div>
<div class="row">
  <div class="col-md-7">
    <div class="text-light bg-primary">Długość rolki</div>
    <?php echo '<fieldset disabled><input type="text" class="form-control" id="formGroupExampleInput" name="quantity_er"   placeholder=" '.$_SESSION['roll_length'].'"></fieldset>';    ?>
  </div>
  <div class="col-md-5">
    <div class="text-light bg-primary">Ilość użytków</div>
    <?php echo '<input type="text" class="form-control" id="formGroupExampleInput" name="ilosc_uzytkow"  placeholder=" '.$_SESSION['ilosc_uzytkow'].'">';    ?>
  </div>
</div>
 <!--</form>-->
