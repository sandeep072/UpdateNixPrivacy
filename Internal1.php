<?php
     include "connect.php";
    if(isset($_POST['submit']))
    {
       $RB=$_POST['RB'];
       $PB=$_POST['PB'];
       $Thought=$_POST['Thought'];
       $wtk=$_POST['wtk'];
       $wst=$_POST['wst'];
       $Pass=$_POST['Pass'];
       $PIN=$_POST['PIN'];
       $Mmn=$_POST['Mmn'];
       $Opinions=$_POST['Opinions'];
       $Intentions=$_POST['Intentions'];
       $Interests=$_POST['Interests'];
       $Favorite=$_POST['Favorite'];
       $Colors=$_POST['Colors'];
       $Likes=$_POST['Likes'];
       $Dislikes=$_POST['Dislikes'];
       $Music=$_POST['Music'];
   
   $sql="INSERT INTO Intern(RB,PB,Thought,wtk,wst,Pass,PIN,Mmn,Opinions,Intentions,Interests,Favorite,Colors,Likes,Dislikes,Music) 
   values('$RB','$PB','$Thought','$wtk','$wst','$Pass','$PIN','$Mmn','$Opinions','$Intentions','$Interests','$Favorite','$Colors','$Likes','$Dislikes','$Music')";
   if(mysqli_query($conn,$sql))
   {

    echo "successfully";
     header("Location:financial1.php");
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->

  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>
  
  <style type="text/css">
    a:hover
    {
      text-decoration-line: ne;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
    <a href="dashboard.php"><img src="nix.png" alt="nix" style="width: 45px;height: 45px;"></a>

  <a class="navbar-brand" href="#" style="color: white">Internal </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>


<form  method="POST">
<div class="container-fluid">
  <div class="row">

  <div class="container bg-light ">
  <div class="row">
              <div class="col-md-12">
                <div class="container-fluid">
                  <div class="">
                  <button type="button" class="btn btn-primary"><a href="" style="color: white"><span class="badge">1</span> External Data </a></button>
<button type="button" class="btn btn-warning"><a href="" style="color: white"><span class="badge">2</span> Internal Data <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a></button>
<!-- <button type="button" class="btn btn-info"><a href="" style="color: white"><span class="badge">3</span> History</a></button> -->
<button type="button" class="btn btn-danger"><a href="" style="color: white"><span class="badge">3</span> Financial</a></button>
<button type="button" class="btn btn-success"><a href="" style="color: white"><span class="badge">4</span> Social </a></button>
</div>
                 <hr>
                    <div id="demo-accordion-collapse" role="tablist">
                      <div class="card">
                       <div class="card-header" role="tab" id="accord1">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-pane-1" role="button" aria-expanded="false" aria-controls="collapse-pane-1">
         Kwledge and Belief
                      </a>
                       </div>
    <div id="collapse-pane-1" class="collapse show" role="tabpanel" aria-labelledby="accord1" data-parent="#demo-accordion-collapse">
      <div class="card-body">
      <div class="container-fluid">
        <h3>1.1 Information about  what a person kw or believes
</h3>
<div class="col-md-4 ">
      
    <table class="table" style="width: 400px;">
  <tbody>
    <tr>
      <th scope="row">Religious beliefs</th>
      <td> 
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="RB" value="Religious beliefs">
      </td>
  
    </tr>
    <tr>
      <th scope="row">Philosophical beliefs</th>
      <td>  
      <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="PB" value="Philosophical beliefs">
 </td>

    </tr>
    <tr>
      <th scope="row">Thought</th>
      <td> 
      <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Thought" value="Thought">

</td>
    </tr>
      <tr>
      <th scope="row">What they know and don't know</th><td>
 <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="wtk" value="What they know and do not know">
 </td>
    </tr>
       <tr>
      <th scope="row">What someone thinks</th><td>
<input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="wst" value="What someone thinks">
 </td>
    </tr>
     
  </tbody>
</table>
</div>
     </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" role="tab1" id="accord2">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-2" role="button" aria-expanded="false" aria-controls="collapse-pane-2">
Authenticating
        </a>
      </h5>
    </div>
   <div id="collapse-pane-2" class="collapse" role="tabpanel" aria-labelledby="accord2" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container-fluid">
              <h3>2.1 Information used to  authenticate an individual  with  something they show</h3>
              <div class="col-md-4 ">
         


            <table class="table" style="width: 400px;">
  <tbody>
    <tr>
      <th scope="row">Password</th>
      <td> 
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Pass" value="Password" data-width="70" data-height="32">
 </td>
  
    </tr>
    <tr>
      <th scope="row">PIN</th>
      <td> 
            <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="PIN" value="PIN" data-width="70" data-height="32">
 </td>

    </tr>
    <tr>
      <th scope="row">Mother's maiden name</th>
      <td>
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Mmn" value="Mother`s maiden name"data-width="70" data-height="32">

</td>
    </tr>
      
  </tbody>
</table>

</div>
         </div>      
      </div>

  </div>
  </div>


  <div class="card">
    <div class="card-header" role="tab2" id="accord3">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-3" role="button" aria-expanded="false" aria-controls="collapse-pane-3">
         Prefrence
        </a>
      </h5>
    </div>
  <div id="collapse-pane-3" class="collapse" role="tabpanel" aria-labelledby="accord3" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container-fluid">
              <h3>3.1 Information about  and individual's  prefrences  or  interests</h3>
              <div class="col-md-4">
                 <table class="table">
  <tbody>
    <tr>
      <th scope="row">Opinions</th>
      <td> 
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Opinions" value="Opinions" data-width="70" data-height="32">
 </td>
  
    </tr>
    <tr>
      <th scope="row">Intentions</th>
      <td> 
      <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Intentions" value="Intentions" data-width="70" data-height="32">
</td>

    </tr>
       <th scope="row">Interests</th>
      <td>
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Interests" value="Interests"data-width="70" data-height="32"></td>
  
    </tr>
    <tr>
      <th scope="row">Favorite</th>
      <td> 
           <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Favorite" value="Favorite"data-width="70" data-height="32">
 </td>

    </tr>
       <th scope="row">Colors</th>
      <td>  
      <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Colors" value="Colors"data-width="70" data-height="32">
  </td>
  </tr>
    <tr>
      <th scope="row">Likes</th>
      <td> 
          <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Likes" value="Likes"data-width="70" data-height="32">
 </td>

    </tr>
       <th scope="row">Dislikes</th>
      <td>  
<input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Dislikes" value="Dislikes"data-width="70" data-height="32">
 </td>
  
    </tr>
    <tr>
      <th scope="row">Music</th>
      <td> 
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Music" value="Music"data-width="70" data-height="32">
 </td>

    </tr>
   
      
  </tbody>
</table>
   
</div>             

           
               </div>        
       
   </div>

  </div>

</div>

<input type="submit" class="btn btn-success" style="margin-top:20px;" name="submit" value="Next">
</div>
</div>
</div>
</div>
</div>

</div>
</div> 
</form>
<br>
<br>
</body>
</html>

