<?php
$conn=mysqli_connect("localhost","root","password","kick");


?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Nix Privacy</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
  <a class="navbar-brand" href="#" style="color: white">Nix Privacy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<table class="table table-bordered table-sm">
  <?php
  $query="select * from External,Internal,Financial,Social";
   $result=mysqli_query($conn,$query);
  ?>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Data Owner</th>
      <th scope="col">Process</th>
      <th scope="col"></th>
    
    </tr>
  </thead>
  <?php
      while($rows=mysqli_fetch_assoc($result))
          {

  ?>
  <tbody>
    <tr> 
      <td scope="row"><?php echo $rows['id']; ?></td>
      <td><?php echo $rows['dataOwner']; ?></td>
       <td><?php echo $rows['process']; ?></td>
      <td ><b>Personal Data:</b> 
                 <?php echo $rows['mult']; ?>
                 ,<?php echo $rows['mult2']; ?>
                 ,<?php echo $rows['mult3']; ?>
                  ,<?php echo $rows['Authenticating']; ?>
                  ,<?php echo $rows['Prefrence']; ?>
                  ,<?php echo $rows['Account']; ?>
                  ,<?php echo $rows['Ownership']; ?>
                  ,<?php echo $rows['Transactional']; ?>
                  ,<?php echo $rows['Credit']; ?><br>

           <strong>Special Data</strong>: 
                 <?php echo $rows['mult1']; ?>
                  ,<?php echo $rows['mult5']; ?>
                 ,<?php echo $rows['mult6']; ?>
                 ,<?php echo $rows['Belief']; ?>
                 ,<?php echo $rows['Criminal']; ?>
                ,<?php echo $rows['Public']; ?></td>
      
    </tr>

    <?php 
    }
    ?>
  </tbody>
</table>
</body>
</html>
