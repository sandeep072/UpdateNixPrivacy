<?php
$conn=mysqli_connect("localhost","root","password","kick");

if(isset($_POST['submit']))
{
$dataOwner=$_POST['dataOwner'];
$process=$_POST['process'];

$mult=$_POST['mult'];
$a=implode(",",$mult);

$mult=$_POST['mult1'];
$b=implode(",",$mult);

$mult=$_POST['mult2'];
$c=implode(",",$mult);

$mult=$_POST['mult3'];
$d=implode(",",$mult);

$m1=$_POST['mult4'];
$e=implode(",",$m1);

$m2=$_POST['mult5'];
$f=implode(",",$m2);

$m3=$_POST['mult6'];
$g=implode(",",$m3);

$sql="INSERT INTO External(dataOwner,process,mult,mult1,mult2,mult3,mult4,mult5,mult6) values ('$dataOwner','$process','$a','$b','$c','$d','$e','$f','$g')";
if(mysqli_query($conn,$sql))
{
  echo "Successfully";
    header("Location:Internal.php");
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>


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

  <a class="navbar-brand" href="#" style="color: white">External </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<form method="POST" action="">
<div class="d-flex justify-content-center"><h3>What is the type of personal data you hold</h3></div>

   <div class="container">
    <div class="row d-flex justify-content-center">
    
      <div class="col-md-3">
        <input type="text" name="dataOwner" id="dataOwner" class="form-control" placeholder="Data Owner">

      </div>
        <div class="col-md-3">
        <input type="text" name="process" id="process" class="form-control" placeholder="Process">
        
      </div>
  
    </div>
  </div>



<br>

  <div class="container bg-light ">
  <div class="row">
              <div class="col-md-12">
                <div class="container-fluid">
                  <button type="button" class="btn btn-primary"><a href="" style="color: white"><span class="badge">1</span> External Data <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a></button>
<button type="button" class="btn btn-warning"><a href="" style="color: white"><span class="badge">2</span> Internal Data</a></button>
<button type="button" class="btn btn-info"><a href="" style="color: white"><span class="badge">3</span> History</a></button>
<button type="button" class="btn btn-danger"><a href="" style="color: white"><span class="badge">4</span> Financial</a></button>
<button type="button" class="btn btn-success"><a href="" style="color: white"><span class="badge">5</span> Social </a></button>
<hr>
                 
                    <div id="demo-accordion-collapse" role="tablist">

                      <div class="card">
                       <div class="card-header" role="tab" id="accord1">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-pane-1" role="button" aria-expanded="false" aria-controls="collapse-pane-1">
         Identifying
                      </a>
                       </div>
    <div id="collapse-pane-1" class="collapse show" role="tabpanel" aria-labelledby="accord1" data-parent="#demo-accordion-collapse">
      <div class="card-body">
      <div class="container-fluid">
        <h3>1.1 Information that uniquely or semi-uniquely identifies a specific individual.
</h3>
<div class="col-md-4 ">

<select class="selectpicker" name="mult[]" multiple="multiple" data-live-search="true">
   <option value="Name">Name</option>
    <option value="User-Name">User-Name</option>
     <option value="Unique Identifier">Unique Identifier </option>
      <option value="Picture">Picture</option>
       <option value="Biometric data">Biometric data</option>
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
Ethnicity
        </a>
      </h5>
    </div>
   <div id="collapse-pane-2" class="collapse" role="tabpanel" aria-labelledby="accord2" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>2.1 Information that describes an individual's origins and lineage</h3>
              <div class="col-md-4 ">
          <select class="selectpicker" name="mult1[]" multiple="multiple" data-live-search="true">

        
         <option value="Race">Race</option>
        <option value="National or ethnic origin">National or ethnic origin</option>
        <option value="Languages spoken">Languages spoken</option>
        <option value="Dialects">Dialects</option>
        <option value="Accents">Accents</option>
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
         Sexual
        </a>
      </h5>
    </div>
  <div id="collapse-pane-3" class="collapse" role="tabpanel" aria-labelledby="accord3" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container-fluid">
              <h3>3.1 Information about  and individual's  prefrences  or  interests</h3>
              <div class="col-md-4">
             <select class="selectpicker" name="mult2[]" multiple data-live-search="true">

                <option value="Gender Identity">Gender Identity</option>
               <option value="Prefrences">Prefrences </option>
              <option value="proclivites">proclivites</option>
       <option value="fetishes">fetishes</option>
        <option value="History">History </option>
     
 </select>
</div>             
  </div>            
   </div>
  </div>
</div>


            <div class="card">
    <div class="card-header" role="tab1" id="accord4">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-4" role="button" aria-expanded="false" aria-controls="collapse-pane-4">
Behavioral
        </a>
      </h5>
    </div>
   <div id="collapse-pane-4" class="collapse" role="tabpanel" aria-labelledby="accord4" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>4.1 Information that describes an individual's behavior
or activity, on-line or off </h3>
              <div class="col-md-4 ">
              <select class="selectpicker" name="mult3[]" multiple data-live-search="true" class="form-control">

      <option value="browsing behavior">browsing behavior</option>
        <option value="Call logs">Call logs</option>
        <option value="Links clicked">Links clicked</option>
          <option value="Dameanor">Dameanor</option>
        <option value="Attitude">Attitude</option>
     </select>
</div>
         </div>      
      </div>
  </div>
  </div>


             <div class="card">
    <div class="card-header" role="tab1" id="accord5">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-5" role="button" aria-expanded="false" aria-controls="collapse-pane-5">
Demographics
        </a>
      </h5>
    </div>
   <div id="collapse-pane-5" class="collapse" role="tabpanel" aria-labelledby="accord5" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>5.1 Information that describes
an individual's characteristics shared with others</h3>
              <div class="col-md-4 ">
                   <select class="selectpicker" name="mult4[]" multiple data-live-search="true" id="sell" class="form-control">

         <option value="Age Ranges">Age Ranges</option>
        <option value="Physical traits">Physical traits</option>
        <option value="Income bracketes">Income bracketes</option>
          <option value="Geographic">Geographic</option>
     </select>
</div>
         </div>      
      </div>

  </div>
  </div>

  <div class="card">
    <div class="card-header" role="tab1" id="accord6">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-6" role="button" aria-expanded="false" aria-controls="collapse-pane-6">
Medical and Health
        </a>
      </h5>
    </div>
   <div id="collapse-pane-6" class="collapse" role="tabpanel" aria-labelledby="accord6" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>2.1 Information that describes an individual's health,
medical conditions or health care</h3>
              <div class="col-md-4 ">
                   <select class="selectpicker" name="mult5[]" multiple data-live-search="true">
         <option value="Physical and mental health">Physical and mental health</option>
        <option value="Drug test results">Drug test results</option>
        <option value="Disabilities"> Disabilities </option>
       <option value="Family or individual health history">Family or individual health history</option>
        <option value="Health records">Health records</option>
        <option value="blood types"> blood types</option>
           <option value="DNA code">DNA code</option>
        <option value="prescriptions">prescriptions </option>
     </select>
</div>
         </div>      
      </div>

  </div>
  </div>

         <div class="card">
    <div class="card-header" role="tab6" id="accord7">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-7" role="button" aria-expanded="false" aria-controls="collapse-pane-7">
Physical Characteristics
        </a>
      </h5>
    </div>
   <div id="collapse-pane-7" class="collapse" role="tabpanel" aria-labelledby="accord7" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>2.1 Information that describes an individual's physical characteristics</h3>
              <div class="col-md-4 ">
                   <select class="selectpicker" name="mult6[]" multiple data-live-search="true">

            
         <option value="Height">Height</option>
        <option value="Weight">Weight</option>
        <option value="age">age</option>
           <option value="Hair color">Hair color</option>
        <option value="Skin tone">Skin  tone</option>
        <option value="Tattoos">Tattoos</option>
           <option value="Gender">Gender</option>
        <option value="Piercings">Piercings</option>
        
     </select>
</div>
         </div>      
      </div>

  </div>
  </div>

<input type="submit" class="btn btn-success" name="submit" value="Next" style="margin-top:20px;">
</div>
</div>
</div>
</div>


</form>
<br>
<br>
</body>
</html>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>