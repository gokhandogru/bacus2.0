
<!--When you want to add a new language to the website, use this template. Wherever it says "NEWLANG", replace it with your new language name. For example, "Maltese".
If you want the other language queries include this language you will need to add the the code below to all other landing pages:

		echo (!empty($row['NEWLANG']) ? "<td><b>NEWLANG:</b><br>{$row["NEWLANG"]}</td><br>" : "");
		echo (!empty($row['NEWLANG_Def']) ? "<td><b>NEWLANG Definition:</b><br>{$row["NEWLANG_Def"]}</td><br>" : "");
		echo (!empty($row['NEWLANG_Context']) ? "<td><b>NEWLANG Context:</b><br>{$row["NEWLANG_Context"]}</td><br><hr>" : "");

This will allow your multilingual search internally consistent throughout all languages.

  -->

<head>
<?php include('includes/headbacus.php'); ?>




<body>

<?php include('includes/navbacus.php'); ?>
<div class="container">
<div class='card-panel orange lighten-3'>

<?php

include "db_connect_uab.php";

$keywordfromform = $_GET["keyword"];



echo "<br><h6><b>We have more than 50000 terms like '<i>$keywordfromform</i>' in our term database:</b></h6>";



$sql = "SELECT * FROM bacus_multilingual WHERE NEWLANG = '$keywordfromform' OR NEWLANG LIKE '% $keywordfromform' OR NEWLANG LIKE '$keywordfromform %' OR NEWLANG LIKE '% $keywordfromform %' ORDER BY CHAR_LENGTH(NEWLANG) LIMIT 25";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {
 
   
	if (!empty($row))
		
	{
		
		
		echo "<br><br>
		
		
  <div class='card-panel orange lighten-5'>";
		echo (!empty($row['NEWLANG']) ? "<td><b>NEWLANG:</b><br>{$row["NEWLANG"]}</td><br>" : "");
		echo (!empty($row['Domain']) ? "<td><b>Domain:</b><br>{$row["Domain"]}</td><br>" : "");
		echo (!empty($row['Subdomain']) ? "<td><b>Subdomain:</b><br>{$row["Subdomain"]}</td><br>" : "");
		echo (!empty($row['Entry_Created']) ? "<td><b>Entry Created at:</b><br>{$row["Entry_Created"]}</td><br><hr>" : "");
		echo (!empty($row['NEWLANG_Def']) ? "<td><b>NEWLANG Definition:</b><br>{$row["NEWLANG_Def"]}</td><br>" : "");
		echo (!empty($row['NEWLANG_Context']) ? "<td><b>NEWLANG Context:</b><br>{$row["NEWLANG_Context"]}</td><br><hr>" : "");
		
		echo (!empty($row['Turkish']) ? "<td><b>Turkish:</b><br>{$row["Turkish"]}</td><br>" : "");
		echo (!empty($row['Turkish_Def']) ? "<td><b>Turkish Definition:</b><br>{$row["Turkish_Def"]}</td><br>" : "");
		echo (!empty($row['Turkish_Context']) ? "<td><b>Turkish Context:</b><br>{$row["Turkish_Context"]}</td><br><hr>" : "");
		
		echo (!empty($row['Arabic']) ? "<td><b>Arabic:</b><br>{$row["Arabic"]}</td><br>" : "");
		echo (!empty($row['Arabic_Def']) ? "<td><b>Arabic Definition:</b><br>{$row["Arabic_Def"]}</td><br>" : "");
		echo (!empty($row['Arabic_Context']) ? "<td><b>Arabic Context:</b><br>{$row["Arabic_Context"]}</td><br><hr>" : "");
		
		echo (!empty($row['German']) ? "<td><b>German:</b><br>{$row["German"]}</td><br>" : "");
		echo (!empty($row['German_Def']) ? "<td><b>German Definition:</b><br>{$row["German_Def"]}</td><br>" : "");
		echo (!empty($row['German_Context']) ? "<td><b>German Context:</b><br>{$row["German_Context"]}</td><br><hr>" : "");
		
		echo (!empty($row['Italian']) ? "<td><b>Italian:</b><br>{$row["Italian"]}</td><br>" : "");
		echo (!empty($row['Italian_Def']) ? "<td><b>Italian Definition:</b><br>{$row["Italian_Def"]}</td><br>" : "");
		echo (!empty($row['Italian_Context']) ? "<td><b>Italian Context:</b><br>{$row["Italian_Context"]}</td><br><hr>" : "");
		
		echo (!empty($row['French']) ? "<td><b>French:</b><br>{$row["French"]}</td><br>" : "");
		echo (!empty($row['French_Def']) ? "<td><b>French Definition:</b><br>{$row["French_Def"]}</td><br>" : "");
		echo (!empty($row['French_Context']) ? "<td><b>French Context:</b><br>{$row["French_Context"]}</td><br><hr>" : "");
		
		echo (!empty($row['Catalan']) ? "<td><b>Catalan:</b><br>{$row["Catalan"]}</td><br>" : "");
		echo (!empty($row['Catalan_Def']) ? "<td><b>Catalan Definition:</b><br>{$row["Catalan_Def"]}</td><br>" : "");
		echo (!empty($row['Catalan_Context']) ? "<td><b>Catalan Context:</b><br>{$row["Spanish_Context"]}</td><br><hr>" : "");
		
		echo (!empty($row['Spanish']) ? "<td><b>Spanish:</b><br>{$row["Spanish"]}</td><br>" : "");
		echo (!empty($row['Spanish_Def']) ? "<td><b>Spanish Definition:</b><br>{$row["Spanish_Def"]}</td><br>" : "");
		echo (!empty($row['Spanish_Context']) ? "<td><b>Spanish Context:</b><br>{$row["Spanish_Context"]}</td><br><hr>" : "");
		
		
		echo (!empty($row['English_GB']) ? "<td><b>English:</b><br>{$row["English_GB"]}</td><br>" : "");
		echo (!empty($row['English_GB_Def']) ? "<td><b>English Definition:</b><br>{$row["English_GB_Def"]}</td><br>" : "");
		echo (!empty($row['English_GB_Context']) ? "<td><b>English Context:</b><br>{$row["English_GB_Context"]}</td><br><hr>" : "");
		
		
		
		echo (!empty($row['Portuguese']) ? "<td><b>Portuguese:</b><br>{$row["Portuguese"]}</td><br>" : "");
		echo (!empty($row['Portuguese_Def']) ? "<td><b>Portuguese Definition:</b><br>{$row["Portuguese_Def"]}</td><br>" : "");
		echo (!empty($row['Portuguese_Context']) ? "<td><b>Portuguese Context:</b><br>{$row["Portuguese_Context"]}</td><br><hr>" : "");
		
		echo (!empty($row['Swedish']) ? "<td><b>Swedish:</b><br>{$row["Swedish"]}</td><br>" : "");
		echo (!empty($row['Swedish_Def']) ? "<td><b>Swedish Definition:</b><br>{$row["Swedish_Def"]}</td><br>" : "");
		echo (!empty($row['Swedish_Context']) ? "<td><b>Swedish Context:</b><br>{$row["Swedish_Context"]}</td><br><hr>" : "");
				
		echo (!empty($row['Japanese']) ? "<td><b>Japanese:</b><br>{$row["Japanese"]}</td><br>" : "");
		echo (!empty($row['Japanese_Def']) ? "<td><b>Japanese Definition:</b><br>{$row["Japanese_Def"]}</td><br>" : "");
		echo (!empty($row['Japanese_Context']) ? "<td><b>Japanese Context:</b><br>{$row["Japanese_Context"]}</td><br><hr>" : "");
		
				
		echo (!empty($row['Danish']) ? "<td><b>Danish:</b><br>{$row["Danish"]}</td><br>" : "");
		echo (!empty($row['Danish_Def']) ? "<td><b>Danish Definition:</b><br>{$row["Danish_Def"]}</td><br>" : "");
		echo (!empty($row['Danish_Context']) ? "<td><b>Danish Context:</b><br>{$row["Danish_Context"]}</td><br><hr>" : "");
				
		echo (!empty($row['Dutch']) ? "<td><b>Dutch:</b><br>{$row["Dutch"]}</td><br>" : "");
		echo (!empty($row['Dutch_Def']) ? "<td><b>Dutch Definition:</b><br>{$row["Dutch_Def"]}</td><br>" : "");
		echo (!empty($row['Dutch_Context']) ? "<td><b>Dutch Context:</b><br>{$row["Dutch_Context"]}</td><br><hr>" : "");
				
		echo (!empty($row['Galician']) ? "<td><b>Galician:</b><br>{$row["Galician"]}</td><br>" : "");
		echo (!empty($row['Galician_Def']) ? "<td><b>Galician Definition:</b><br>{$row["Galician_Def"]}</td><br>" : "");
		echo (!empty($row['Galician_Context']) ? "<td><b>Galician Context:</b><br>{$row["Galician_Context"]}</td><br><hr>" : "");
				
		echo (!empty($row['Norwegian']) ? "<td><b>Norwegian:</b><br>{$row["Norwegian"]}</td><br>" : "");
		echo (!empty($row['Norwegian_Def']) ? "<td><b>Norwegian Definition:</b><br>{$row["Norwegian_Def"]}</td><br>" : "");
		echo (!empty($row['Norwegian_Context']) ? "<td><b>Norwegian Context:</b><br>{$row["Norwegian_Context"]}</td><br><hr>" : "");
				
		echo (!empty($row['Basque']) ? "<td><b>Basque:</b><br>{$row["Basque"]}</td><br>" : "");
		echo (!empty($row['Basque_Def']) ? "<td><b>Basque Definition:</b><br>{$row["Basque_Def"]}</td><br>" : "");
		echo (!empty($row['Basque_Context']) ? "<td><b>Basque Context:</b><br>{$row["Basque_Context"]}</td><br><hr>" : "");
				
		echo (!empty($row['Latin']) ? "<td><b>Latin:</b><br>{$row["Latin"]}</td><br>" : "");
		echo (!empty($row['Latin_Def']) ? "<td><b>Latin Definition:</b><br>{$row["Latin_Def"]}</td><br>" : "");
		echo (!empty($row['Latin_Context']) ? "<td><b>Latin Context:</b><br>{$row["Latin_Context"]}</td><br><hr>" : "");
				
		echo (!empty($row['Chinese_PRC']) ? "<td><b>Chinese_PRC:</b><br>{$row["Chinese_PRC"]}</td><br>" : "");
		echo (!empty($row['Chinese_PRC_Def']) ? "<td><b>Chinese_PRC Definition:</b><br>{$row["Chinese_PRC_Def"]}</td><br>" : "");
		echo (!empty($row['Chinese_PRC_Context']) ? "<td><b>Chinese_PRC Context:</b><br>{$row["Chinese_PRC_Context"]}</td><br><hr>" : "");
				
		echo (!empty($row['Romanian']) ? "<td><b>Romanian:</b><br>{$row["Romanian"]}</td><br>" : "");
		echo (!empty($row['Romanian_Def']) ? "<td><b>Romanian Definition:</b><br>{$row["Romanian_Def"]}</td><br>" : "");
		echo (!empty($row['Romanian_Context']) ? "<td><b>Romanian Context:</b><br>{$row["Romanian_Context"]}</td><br><hr>" : "");
				
		echo (!empty($row['Russian']) ? "<td><b>Russian:</b><br>{$row["Russian"]}</td><br>" : "");
		echo (!empty($row['Russian_Def']) ? "<td><b>Russian Definition:</b><br>{$row["Russian_Def"]}</td><br>" : "");
		echo (!empty($row['Russian_Context']) ? "<td><b>Russian Context:</b><br>{$row["Russian_Context"]}</td><br><hr>" : "");
				
					
		echo (!empty($row['English']) ? "<td><b>English:</b><br>{$row["English"]}</td><br>" : "");
		echo (!empty($row['English_Def']) ? "<td><b>English Definition:</b><br>{$row["English_Def"]}</td><br>" : "");
		echo (!empty($row['English_Context']) ? "<td><b>English Context:</b><br>{$row["English_Context"]}</td><br><hr>" : "");
				
		
		
		
		
		echo "</div>";
	}
	
	
	}
	
	
	}



	else {
    echo "0 result found. We hope to add the term you searched for in the future!";
}

echo "</table>";

echo "<p>BACUS is a database born with the will of constituting a resource for the access and dissemination of the terminology works made by the students of the Faculty of Translation and Interpreting at the Autonomous University of Barcelona.<br>

From 1995 and within the framework of the Terminology Applied to Translation class, our students have done terminology research of multilingual character in several fields of specialty. These works are presented now in digital version for free access of all the Internet community with the aim of becoming a useful tool for different groups (proof-readers, translators, specialists, etc.).<br>

Every project has been supervised by an expert on the subject and has been developed at least in three languages; chosen among the languages offered in our degree (Arabic, Catalan, Chinese, English, German, Italian, Japanese, Portuguese, Russian, and Spanish).</p>";

	?>
	<br>
	<br>
	<center><b><a href="http://espanolturco.com/bacus/index_bacus_Turkish.php">Return to NEWLANG term search</a></b></center>
	<?php
echo "Today is " . date("d/m/Y") . "<br>";?>
	</div>
	</div>
	

	
	    </body>
		<?php include('includes/footerbacus.php'); ?>
	</html>


	
