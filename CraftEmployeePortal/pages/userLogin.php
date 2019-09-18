
<?php


// $header = array();
// $header [] = 'Authorisation: Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA';
//  $client = curl_init();


	   // $myresult = json_decode($client);
 // include 'token.php';
 // function dd(){
 // 	getToken();

	// }
include 'token.php';
// refreshToken();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="../assets/css/style.css">
<!-- <link rel="stylesheet" href="../css/style.css"> -->
<script type="text/javascript">
	
	$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</head>
<body>

<div class="login-page">
  <div class="form">

	<form method="post" action="userLogin.php">		
	<input type="text" required="" name="username" placeholder="Enter Username"/>
      <input type="password" required="" name="password" placeholder="Enter Password"/>
      <button type="submit" name="submit" onclick="" class="btn btn-primary btn-block">Login</button>

	</form>

	</div>
	</div>
	
</body>
<?php 

	 if (isset($_POST['submit'])) {
	 	checkToken();
	// 	# code...
	// }
	 // include 'token.php';

  }
?>
<!-- <script src="app.js"></script>
    <script src="controllers/home.js"></script> -->
</html>
