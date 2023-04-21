<html>
<head>
<title>DISPLAY</title>
</head>
<link rel="stylesheet" href="change.css"/>
<body bgcolor="lavender">
	<center><h1 class="disp">REGISTRATION SUCCESSFUL</h1></center><br><br>
	<div class="container">
	<div class="cont2">
	CHECK YOUR PROFILE<br><br><br>
	Your Full Name is :
	<?php
	  echo $_POST["full"];
	?><br><br><br>
	Your Emil-ID is : <?php
	  echo $_POST["email"];
	?><br><br><br>
	Your Contact No. is : <?php
	  echo $_POST['contact'];
	?><br><br><br>
	Your Interest is : <?php
	  echo $_POST["interest"];
	?><br><br><br>
</div>
</div>

	  </body>
</html>