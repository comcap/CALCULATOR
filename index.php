<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Calculator</title>
	<script>
        function check()
        {
            var checkdata=true;
            var msg="Please enter ";
            if (document.getElementById("NUMBER").value=="")
            {
                checkdata=false;
                msg+="NUMBER";
            }
           
            if (!checkdata)
            {
                alert(msg);
            }
            return checkdata;
        }
    </script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script src="js/index.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</head>
<body id="gradient">
	<div class="container">
		<div class="banner"></div>
		<div class="box-from col-xs-8 col-md-offset-2">
			<h1 class="text-center white">CURRENCY CALCULATOR</h1>
			<h2 class="text-center white">802323 WEB AND INTERACTIVE MEDIA DESIGN IV</h2>

			<form action="cal_api.php" method="post">
					<div class="row centered margin">
							<input class="inputnum col-xs-2 col-md-offset-5"" id="NUMBER" type="text" name="NUMBER" placeholder="NUMBER">
						
						<div class="row centered marginag col-md-offset-4">
						<label class="col-xs-1 text-right textpadding" for="select_1">From:</label>
							<div class="col-xs-4">
								<select class="form-control col-xs-1 inputnum" name="First-sel">
								    <option value="THB">THB - Thai Baht</option>
								    <option value="USD">USD - US Dollar</option>
								    <option value="EUR">EUR - Euro</option>
								    <option value="GBP">GBP - British Pound</option>
								</select>
							</div>
						</div>

						<div class="row centered margin col-md-offset-4">
						<label class="col-xs-1 text-right textpadding" for="select_1">To:</label>
							<div class="col-xs-4">
								<select class="form-control col-xs-1 inputnum" name="Second-sel">
								    <option value="USD">USD - US Dollar</option>
								    <option value="EUR">EUR - Euro</option>
								    <option value="GBP">GBP - British Pound</option>
								    <option value="THB">THB - Thai Baht</option>
								</select>
							</div>
						</div>
					</div>
				<center><button type="submit" class="animated infinite bounce fixbtn marginbtn" onclick="return check();">PRESS</button></center>
			</form>
		</div>
	</div>


</body>
</html>