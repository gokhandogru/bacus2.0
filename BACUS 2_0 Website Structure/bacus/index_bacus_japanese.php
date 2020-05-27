<html>
<?php include('../includes/headbacus.php'); ?>




<body>

<?php include('../includes/navbacus.php'); ?>

<?php

include "db_connect_uab.php";



?>


<br>
<br>


<br>
<br>
<div class="container">
<div class='card-panel teal lighten-3'>

<div>
  <label><span class="black-text black-text">Select your language</span></label>
  <select class="browser-default" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">>
    <option value="" disabled selected>Choose your option</option>
    <option id="1" value="http://espanolturco.com/bacus/index_bacus_arabic.php">Arabic</option>
	<option id="2" value="http://espanolturco.com/bacus/index_bacus_basque.php">Basque</option>
	<option id="3" value="http://espanolturco.com/bacus/index_bacus_catalan.php">Catalan</option>
	<option id="4" value="http://espanolturco.com/bacus/index_bacus_chinese.php">Chinese</option>
	<option id="5" value="http://espanolturco.com/bacus/index_bacus_danish.php">Danish</option>
	<option id="6" value="http://espanolturco.com/bacus/index_bacus_dutch.php">Dutch</option>
	<option id="7" value="http://espanolturco.com/bacus/index_bacus_english.php">English</option>
	<option id="8" value="http://espanolturco.com/bacus/index_bacus_englishgb.php">English_GB</option>
	<option id="9" value="http://espanolturco.com/bacus/index_bacus_french.php">French</option>
	<option id="10" value="http://espanolturco.com/bacus/index_bacus_galician.php">Galician</option>
	<option id="11" value="http://espanolturco.com/bacus/index_bacus_german.php">German</option>
	<option id="12" value="http://espanolturco.com/bacus/index_bacus_italian.php">Italian</option>
	<option id="13" selected="selected" value="http://espanolturco.com/bacus/index_bacus_japanese.php">Japanese</option>	
	<option id="14" value="http://espanolturco.com/bacus/index_bacus_latin.php">Latin</option>
	<option id="15" value="http://espanolturco.com/bacus/index_bacus_norwegian.php">Norwegian</option>
	<option id="16" value="http://espanolturco.com/bacus/index_bacus_portuguese.php">Portuguese</option>
	<option id="17" value="http://espanolturco.com/bacus/index_bacus_romanian.php">Romanian</option>
	<option id="18" value="http://espanolturco.com/bacus/index_bacus_russian.php">Russian</option>
	<option id="19" value="http://espanolturco.com/bacus/index_bacus_swedish.php">Swedish</option>
	<option id="20" value="http://espanolturco.com/bacus/index_bacus_spanish.php">Spanish</option>
	<option id="21" value="http://espanolturco.com/bacus/index_bacus_turkish.php">Turkish</option>
	</select>
  </div>

<br>
<br>
<form class="form-horizontal" action="/buscar_termino_japanese.php">
<fieldset>

<!-- Form Name -->
<legend>Search term in Japanese</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword"></label>
  <div class="col-md-8">
    <input id="keyword" name="keyword" type="search" placeholder="type here..." class="form-control input-md">
    <p class="help-block">Search will show results in all languagues</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-success">Search</button>
  </div>
</div>

 

</fieldset>
</form>



<hr>







<center><b><a href="http://espanolturco.com/bacus/index_bacus_catalan.php">Return to home page</a></b></center>
</div>
</div>



      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	  <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  <script>$(document).ready(function(){
    $('.select').formSelect();
  });</script>


<!--End mc_embed_signup-->
</body>





<?php include('../includes/footerbacus.php'); ?>




























</html>

