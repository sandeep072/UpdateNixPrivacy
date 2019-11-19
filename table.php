<?php
       include "connect.php";
       if(isset($_POST['submit']))
        
       {
             $LegalBase=$_POST['LegalBase'];
             $Assigned=$_POST['Assigned'];
            $sql="INSERT INTO Lawfulness(LegalBase,Assigned) values('$LegalBase','$Assigned')";

                if(mysqli_query($conn,$sql))
                {
                  echo "successfully";
                  header("location:Data-owntable.php");
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
  <title>Nix Privacy</title>
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

<form action="" method="POST">
 <h4>Lawfulness of Personal Data Processing</h4>
    <div class="col-md-12 bg-light">
      <h3></h3>
<table class="table table-bordered ">
  <thead style="background-color: #563D7C;color: white">
    <tr class="Do" class="">
      <th scope="col">Data Owner</th>
      <th scope="col">Process Involved</th> 
      <th scope="col">Legal Bases</th>
      <th scope="col">Assigned to</th>
    
    </tr>
  </thead>
  <tbody>
    <tr class="DD">
      <td>HR</td>
      <td>Recruitment</td>
      <td> 

<div class="form-group">         
            <select class="form-control" id="example" name="LegalBase">
              <option>--Select--</option>
              <option>Consent</option> 
              <option>legitimate</option>      
               <option>Public Interest </option>
              <option>contracture</option> 
              <option>Legal obligation</option>      
               <option>vital interest</option>        
            </select>
        </div>
       </td>
     
     
      <td><div class="form-group">         
            <select class="form-control" id="example" name="Assigned">
              <option>--Select--</option>
              <option>Left Dept</option> 
              <option>Lawyer</option>     
               <option>Data-owner</option> 
              <option>Data-steward</option>          
            </select>
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
<input type="submit" name="submit" class="btn btn-success" onclick="location.href='Data-owntable.html'" value="submit"></center>
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
