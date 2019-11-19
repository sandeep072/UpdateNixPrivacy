<?php
   include "connect.php";
   if(isset($_POST['submit']));
   {
           

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

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>





</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
  <a href="dashboard.php"><img src="nix.png" alt="nix" style="width: 45px;height: 45px;"></a>
  <a class="navbar-brand" href="#" style="color: white">DPO TABLE </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>


<form>
    <div class="col-md-12 bg-light">
      <h3></h3>
<table class="table table-bordered ">
  <?php


       //$query="SELECT * FROM lawOwner order by id desc limit 1";

   $query="SELECT * FROM Extern join lawOwner ON Extern.id = lawOwner.id ORDER BY Extern.id desc limit 1";


         $result=mysqli_query($conn,$query);


  ?>
  <thead style="background-color: #563D7C;color: white">
    <tr class="Do" class="">
       <th scope="col">Consent Obtained</th>
      <th scope="col">Data Owner</th>
      <th scope="col">Process Involved</th> 
      <th scope="col">Activity</th>
      <th scope="col">Purpose</th>
      <th scope="col">Proof of Consent</th>
      <th scope="col">Consent Test/ Attachment</th>
      <th scope="col">Consent Freely given</th> 
     
    </tr>
  </thead>
   <?php 
      while($rows=mysqli_fetch_assoc($result))
          {
  ?>
  <tbody>
    <tr class="DD">
      <td> <?php echo $rows['ConObt']; ?>  </td>

      <td><?php  echo $rows['dataOwner']; ?></td>
   <td><?php  echo $rows['process']; ?></td>
      <td><?php echo $rows['Activity']; ?> </td>

       <td><?php echo $rows['Purpose']; ?></td>
  
      <td>  
         <input type="checkbox"  checked data-toggle="toggle" data-on="YES" data-off="NO" name="jk">
         </td>

       <td><?php   echo $rows['Contxt']; ?>  </td>

      <td> 
        <input type="checkbox" name="chak" data-toggle="toggle" data-on="YES" data-off="NO" checked>
        </td>
     <!--    <script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('color');
 if(val=='pick a color'||val=='Fill Purpose')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>  -->


  <!--       
      <td><div class="form-group">
            <select class="form-control" id="exampleSelectd" onclick="fun()">
              <option>UK</option>
              <option>Ireland</option>        
          </select>
        </div>
      </td>
     <td>  
       <div class="form-group">
            <select class="form-control" id="exampleSelectd">
              <option>Spain</option>
              <option>UK</option>        
            </select>
        </div>
     </td>
      <td></td>
       <td>

      <div id="app-cover">
  <div class="row">
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-1">
          <input type="checkbox" class="checkbox">
          <div class="knobs"></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
</div>
       </td>
      <td>
       NILL
      </td>
       <td></td>
      <td></td>     --> 
    </tr>
    <tr style="background-color: #563D7C;color: white">
       <th scope="col">Consent Specific</th>
       <th scope="col">Consent Informed</th>
      <th scope="col">Consent ambiguous</th>
      <th scope="col">Consent Revokable</th>
      <th scope="col">Action</th> 
      <th scope="col">Assigned</th>
      <th scope="col">Target Date</th>
   <th scope="col">Other Parties Involved</th>
 

    </tr>
    <tr>
      
       <td>
       <center><input type="checkbox" name="consp" data-toggle="toggle" data-on="YES" data-off="NO" checked></center>
      </td>
     <td>  
      <input type="checkbox" name="conin" data-toggle="toggle" data-on="YES" data-off="NO" checked>
     </td>
      <td>   
    <input type="checkbox" name="conam" data-toggle="toggle" data-on="YES" data-off="NO" checked="">
    </td>
       <td>
        <input type="checkbox" name="conrev" data-toggle="toggle" data-on="YES" data-off="NO" checked="">

       </td>
      <td>
        
      </td>
       <td>    
               <input type="text" name="name" id="name1" class="form-control" placeholder="eg :- ...to us ect..   etc.." style="border-color: gray">
      </td>
      <td>          
        <input type="Date" name="dt" id="date" class="form-control" placeholder="eg :-12 months,3 months..   etc.." style="border-color: gray">
</td>  
<td> 
            <input type="text" class="form-control" name="" style="border-color: gray">

   <!-- <input type="te" name="name" id="name1" class="form-control" placeholder="eg :- ...to us ect..   etc.."> -->
</td>
    </tr>
  </tbody>
<?php
}
?>
</table>

</div>
<center>
  <input type="submit" name="submit" class="btn btn-success" >

  </center>
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
