<?php 
session_start();
if(!isset($_SESSION['adminsession'])){
	echo "<script>window.location='login.php'</script>";
}

 ?>

<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>

<?php 
        $db = new Database();
        $fm = new Format();     
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Survey System</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>

  <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

  <style type="text/css">
    /*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */

body, html{
     height: 100%;
  background-repeat: no-repeat;
  background-color: #d3d3d3;
  font-family: 'Oxygen', sans-serif;
}

.main{
  margin-top: 70px;
}

h1.title { 
  font-size: 50px;
  font-family: 'Passion One', cursive; 
  font-weight: 400; 
}

hr{
  width: 10%;
  color: #fff;
}

.form-group{
  margin-bottom: 15px;
}

label{
  margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
  background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
  margin-top: 30px;
  margin: 0 auto;
  max-width: 330px;
    padding: 40px 40px;

}

.login-button{
  margin-top: 5px;
}

.login-register{
  font-size: 11px;
  text-align: center;
}

html,
body {
    margin:0;
    padding:0;
    height:100%;
}
#wrapper {
    min-height:100%;
    position:relative;
}

#content {
    padding-bottom:100px; /* Height of the footer element */
}
#footer {
   
    width:100%;
    
    position:absolute;
    bottom:0;
    left:0;
}

.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
    border: 1px solid black;
}
.table-bordered {
    border: 1px solid black;
}

  </style>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <div id="wrapper">
    <!-- Fixed navbar -->
    <div id="header">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><b>Survey System</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
    <div id="content">
    <div class="container">
      <div class="row main">
        
       <table class="table table-bordered">
    <thead>
      <tr>
        <th>Result_ID</th>
        <th>E-mail</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>

    <?php 
				$query = "SELECT * FROM  result ORDER BY Result_ID desc";
				$datas = $db->select($query);
				if ($datas) {
				$i=0;
				while ($result = $datas->fetch_assoc()) {
				$i++;
			 ?>

      <tr>
        <td><?php echo $result['Result_ID']; ?></td>
        <td>
        <?php

        $get_the_id = $result['Username_ID'];

        $signlequery = "SELECT * FROM  username WHERE Username_ID = '$get_the_id'";
        $signledata= $db->select($signlequery);
        while ($singleresult = $signledata->fetch_assoc()) {
          echo $singleresult['Email'];
        }

         ?>

        </td>
        <td><?php 

        $get_results = unserialize(base64_decode($result['Result']));

        foreach ($get_results as $get_result) {
        	echo 'Q: '.$get_result['question'].'<br>';
        	echo 'A: '.$get_result['answer'].'<br><hr>';

        	
        }

         ?></td>
      </tr>

     <?php  }  }  ?>

    </tbody>
  </table>
      </div>
    </div>
</div>
  
<div id="footer">
    <div class="container">
      <hr>
    <p class="centered">Copyright &copy; 2019 All rights reserved</p>
    </div>
 </div>
  
  

  
  
  
 
  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    </div>
  </body>
</html>
