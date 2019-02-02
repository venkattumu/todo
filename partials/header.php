<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if(isset($pagetitle)){echo $pagetitle; } ?></title>
    <!-- google fonts links -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- normal css links -->
    <link rel="stylesheet" href="bootstrap-material-design.css">
    <link rel="stylesheet" href="ripples.css">

    <link rel="stylesheet" href="app.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-info bg-info">
  <a class="navbar-brand text-dark" href="#"><b>PDO TO-DO</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-dark" href="index.php"><i class="fa fa-plus"></i>&nbsp; Create Task</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="tasks.php"><i class="fa fa-eye-slash"></i>&nbsp; View Task</a>
      </li>    
      
    </ul>
    
  </div>
</nav>

<!-- app alert -->
<div id="ajax_msg" class="alert alert-success"></div>
    
