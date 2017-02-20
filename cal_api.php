<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SUSSCESS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
			<div class="banner"></div>
			<div class="box-from-api col-xs-8 col-md-offset-2">
				<h1 class="text-center text-h">CURRENCY CALCULATOR</h1>
				<h2 class="text-center text-h">802323 WEB AND INTERACTIVE MEDIA DESIGN IV</h2>

				<?php 

					function convertCurrency($amount, $from, $to){
				    $url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
				    $data = file_get_contents($url);
				    preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
				    $converted = preg_replace("/[^0-9.]/", "", $converted[1]);
				    return round($converted, 3);
					}

					$NUMBER = ($_POST["NUMBER"]);
					$First = ($_POST["First-sel"]);
					$Second  = ($_POST["Second-sel"]);
					$result = convertCurrency("$NUMBER","$First","$Second");	

					
				 ?>
				 	<div class="row centered margin">
					<div class="col-xs-8 col-md-offset-3 text-result">
						<div class="col-xs-4 refontsize"><?php echo "$NUMBER"." "."$First"." =";?></div>
						<div class="col-xs-6 box-result"><?php echo "$result"." "."$Second"; ?></div>
					</div>

					</div>
					<center><a href="index.php"><button type="submit" class="animated infinite bounce fixbtn marginbtn">BACK</button></a></center>
			</div>
		</div>
 	</div>
	
</body>
</html>