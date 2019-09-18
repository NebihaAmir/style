
<!DOCTYPE html>
<html>
 <?php
//  $header = array();
//  $header [] = 'Authorisation: Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA';
//   $client = curl_init();
// curl_setopt($client,CURLOPT_URL,'https://app.icraftsoft.net:9090/rest/user');
//     curl_setopt($client,CURLOPT_HTTPHEADER,$header);
//       $result = curl_exec($client);

    ?>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
<!--   <link rel="stylesheet" href="../style.css"> -->
  <style type="text/css">
.ancher{
  color: white;

  text-decoration: none;
  padding-bottom: 10px;

}
.ancher:hover{
  color: white;
  text-decoration: none;
}
.container{
  
  height: 800px;
}


    
  </style>

<head>
  <title></title>
</head>
<body>

<div class="col-sm-2"></div>

<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Employee Mangement Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="logout.php">Logout</a></li>
      
    </ul>
  </div>
</nav>

<div class="col-sm-12">
  <div  class="col-sm-3" class="bot"></div> 
  <div  class="col-sm-6" class="formUi">
    <img src="../img/craft.png" class="grid-container">
        <div class="col-sm-12">
                      
         
            <div class="modal-footer">
            <div class="wrapper-div">
           
            <div class="col-sm-10"><a class="ancher" href="form.php"><button style="margin-bottom: 10px" type="button" class="btn btn-success btn-block">Create Profile</button> </a></div>
            <!-- <input type="button" class="mybtn" value="Create Profile" class="btn btn-success btn-block" onclick="window.location.href='form.php'" />   -->
             <div class="col-sm-10"><a class="ancher" href="#"><button style="margin-bottom: 10px" type="button" class="btn btn-warning btn-block">My Profile</button> </a></div>
           <!--  <a class="ancher" href="#"><button style="margin-bottom: 10px" type="button" class="btn btn-info btn-block">Create Profile</button> </a> -->
            
            
              </div>
            </div>

         
        </div>
  
  </div>

      
  <div  class="col-sm-2"></div> 
  
</div>
</div>


</body>
</html>