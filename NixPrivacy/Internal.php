<?php
$conn=mysqli_connect("localhost","root","password","kick");

if(isset($_POST['submit']))
{
$m1=$_POST['Belief'];
$a1=implode(",",$m1);

$m2=$_POST['Authenticating'];
$b1=implode(",",$m2);

$m3=$_POST['Prefrence'];
$c1=implode(",",$m3);

$sql="INSERT INTO Internal(Belief,Authenticating,Prefrence) values ('$a1','$b1','$c1')";
if(mysqli_query($conn,$sql))
{
  echo "successfully";
   header("Location:historical.php");
}
else
{
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

?> 

<!DOCTYPE html>
<html>
<head>
  <title></title>

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

  
  <style type="text/css">
    a:hover
    {
      text-decoration-line: none;
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



<form action="" method="POST">
<div class="container-fluid">
  <div class="row">

  <div class="container bg-light ">
  <div class="row">
              <div class="col-md-12">
                <div class="container-fluid">
                  <div class="">
                  <button type="button" class="btn btn-primary"><a href="" style="color: white"><span class="badge">1</span> External Data </a></button>
<button type="button" class="btn btn-warning"><a href="" style="color: white"><span class="badge">2</span> Internal Data <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a></button>
<button type="button" class="btn btn-info"><a href="" style="color: white"><span class="badge">3</span> History</a></button>
<button type="button" class="btn btn-danger"><a href="" style="color: white"><span class="badge">4</span> Financial</a></button>
<button type="button" class="btn btn-success"><a href="" style="color: white"><span class="badge">5</span> Social </a></button>
</div>
                 <hr>
                    <div id="demo-accordion-collapse" role="tablist">
                      <div class="card">
                       <div class="card-header" role="tab" id="accord1">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-pane-1" role="button" aria-expanded="false" aria-controls="collapse-pane-1">
         Knowledge and Belief
                      </a>
                       </div>
    <div id="collapse-pane-1" class="collapse show" role="tabpanel" aria-labelledby="accord1" data-parent="#demo-accordion-collapse">
      <div class="card-body">
      <div class="container-fluid">
        <h3>1.1 Information about  what a person know or believes
</h3>
<div class="col-md-4 ">
          <select class="selectpicker" name="Belief[]" multiple data-live-search="true">
   <option value="Religious beliefs">Religious beliefs</option>
    <option value="Philosophical beliefs">Philosophical beliefs</option>
     <option value="Thought">Thought </option>
      <option value="What they know and  don't know">What they know and  don't know</option>
       <option value="What someone thinks">What someone thinks</option>
 </select>  
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
             <div class="container">
              <h3>2.1 Information used to  authenticate an individual  with  something they show</h3>
              <div class="col-md-4 ">
          <select class="selectpicker" name="Authenticating[]" multiple data-live-search="true">
         <option value="Password">Password</option>
        <option value="PIN">PIN</option>
        <option value="Mother's maiden name">Mother's maiden name </option>
     </select>
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
          <select class="selectpicker" name="Prefrence[]" multiple data-live-search="true">
   <option value="Opinions">Opinions</option>
    <option value="Intentions">Intentions</option>
     <option value="Interests">Interests </option>
      <option value="Favorite">Favorite foods</option>
       <option value="Colors">Colors</option>
        <option value="Likes">Likes </option>
      <option value="Dislikes">Dislikes</option>
       <option value="Music">Music </option>   
 </select>
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

