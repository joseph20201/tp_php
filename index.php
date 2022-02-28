<!DOCTYPE html>
<html>
<head>

  <title>SYNTAXE DU SCRIPT PHP</title>
  <meta charset="utf-8"/>

  
</head>
<body>
	<div style="border: 2px solid black; height:100%; position:relative;">
		<div>
			<img src="images/Shikamaru.jpg" alt="" width="20%"/>
			<marquee>Bonjour</marquee>
			<?php
				
				include("menu.php");
			?>
		</div>
		<div style="border: 2px solid blue; height:70%; float:left; width:29.4%;" class="jos">
			<?php
				require("menuvertical.php");
			?>
		</div>
		<div style="border: 2px solid red; position:absolute; width:70%; margin-left:29.8%;" class="sito">
		
			
		</div>

	</div>
	

</body>
</html>