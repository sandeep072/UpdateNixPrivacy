<?php
  include "connect.php";
  if(isset($_POST['submit']))
  {
          $Activity=$_POST['Activity'];
             $Purpose=$_POST['Purpose'];

             $ConObt=$_POST['ConObt'];
             $Attachement=$_POST['Attachement'];
                $Contxt=$_POST['Contxt'];

  $sql="INSERT INTO lawOwner(Activity,Purpose,ConObt,Attachement,Contxt) values('$Activity','$Purpose','$ConObt','$Attachement','$Contxt')";
 if(mysqli_Query($conn,$sql)) 
 {
  echo "successfully";
  header("location:dpolaw.php");
 }
 else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;

 }


  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Nix privacy</title>
     <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0"> 

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
  <a href="dashboard.php"><img src="nix.png" alt="nix" style="width: 45px;height: 45px;"></a>
  <a class="navbar-brand" href="#" style="color: white">Details </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<form method="POST" action="">
    <div class="col-md-12 bg-light">
      <h3></h3>
<table class="table table-bordered ">
  <thead style="background-color: #563D7C;color: white">
    <tr class="Do" class="">
      <th scope="col">Data Owner</th>
      <th scope="col">Data Process </th> 
      <th scope="col">Activity</th>
      <th scope="col">Purpose</th>
      <th scope="col">Consent Obtained</th>
      <th scope="col">Consent text / Attachement</th>
    
    </tr>
  </thead>
  <tbody>
    <tr class="DD">
      <td>HR</td>
      <td>Recruitment</td>
      <td><input type="text" class="form-control" name="Activity"></td>
        <td><input type="text" class="form-control" name="Purpose"></td>
      <td> 

<div class="form-group">         
            <select class="form-control" id="example" name="ConObt">
              <option>--Select--</option>
              <option value="Consent Obtained">Yes</option> 
              <option value="No consent">No</option>      
               <option value="Not Sure">Not Sure</option>
                  
            </select>
        </div>
       </td>
     
     
      <td>
        <div class="form-group">         
            <input type="text" class="form-control" name="Contxt">
            <br>
            <input type="file" name="pic" name="Attachement">
        </div>
        </td>
<!--         <script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('color');
 if(val=='pick a color'||val=='Fill Purpose')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script> 
 -->

 
    </tr>

   
  </tbody>

</table>

</div>
<center>
  <input type="submit" name="submit" class="btn btn-success" value="Submit"></center>
</form>
</body>
</html>



<script type="text/javascript">
  $(document).ready(function(){
   $('.Do').click(function(){
        $('.DD').toggle();
   });

  })
</script>
