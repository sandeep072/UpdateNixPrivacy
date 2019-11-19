<?php
 include "connect.php";
  // $conn=mysqli_connect("localhost","root","password","kick");


if(isset($_POST['submit']))
{
     $dataOwner=$_POST['dataOwner'];
   $process=$_POST['process'];
   $name=$_POST['name'];
   $un=$_POST['un'];
     $pic=$_POST['pic'];

   $ui=$_POST['ui'];
   $bd=$_POST['bd'];
   $R=$_POST['R'];
     $Ne=$_POST['Ne'];
   $Ls=$_POST['Ls'];
   $Di=$_POST['Di'];
   $Ac=$_POST['Ac'];
   $GI=$_POST['GI'];



     $Pre=$_POST['Pre'];
     $Pro=$_POST['Pro'];
     $fe=$_POST['fe'];
     $history=$_POST['history'];
     $BB=$_POST['BB'];

     $cl=$_POST['cl'];
     $Lc=$_POST['Lc'];    
     $Da=$_POST['Da'];
     $Attitude=$_POST['Attitude'];
     $AR=$_POST['AR'];
     $Pt=$_POST['Pt'];


     $IB=$_POST['IB'];
   $Ge=$_POST['Ge'];
     $Pmh=$_POST['Pmh'];
   $Dtr=$_POST['Dtr'];
   $Dis=$_POST['Dis'];
   $HR=$_POST['HR'];
   $BT=$_POST['BT'];
   $HC=$_POST['HC'];
   $Dei=$_POST['Dei'];
   $WE=$_POST['WE'];
   $age=$_POST['age'];
     $Sk=$_POST['Sk'];
   $Gender=$_POST['Gender'];
   $tabl=$_POST['tabl'];
   $Piercings=$_POST['Piercings'];



 $sql="INSERT INTO Extern(dataOwner,process,name,un,pic,ui,bd,R,Ne,Ls,Di,Ac,GI,Pre,Pro,fe,history,BB,cl,Lc,Da,Attitude,AR,Pt,IB,Ge,Pmh,Dtr,Dis,HR,BT,HC,Dei,WE,age,Sk,Gender,tabl,Piercings) values('$dataOwner','$process','$name','$un','$pic','$ui','$bd','$R','$Ne','$Ls','$Di','$Ac','$GI','$Pre','$Pro','$fe','$history','$BB','$cl','$Lc','$Da','$Attitude','$AR','$Pt','$IB','$Ge','$Pmh','$Dtr','$Dis','$HR','$BT','$HC','$Dei','$WE','$age','$Sk','$Gender','$tabl','$Piercings')";
     


  
// $sql="INSERT INTO External1(name,un,pic,ui,bd,R,Ne,Ls,Di,Ac,GI,Pre,Pro,fe,history,BB,cl,Lc,Da,Attitude,AR,Pt,IB,Ge,Pmh,Dtr,Dis,Fih,HR,BT,HC,Dei,WE,age,Sk,Gender,table,Piercings,dataOwner,process)
//  values ('$name','$un','$pic','$ui','$bd','$R','$Ne','$Ls','$Di','$Ac','$GI','$Pre','$Pro','$fe','$history','$BB','$cl','$Lc','$Da','$Attitude','$AR','$Pt','$IB','$Ge','$Pmh','$Dtr','$Dis','$Fih','$HR','$BT','$HC','$Dei','$WE','$age','$Sk','$Gender','$table','$Piercings','$dataOwner','$process')";





if(mysqli_query($conn,$sql))
{
  echo "Successfully";
    header("Location:Internal1.php");
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
  ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
}
}

?>




<!DOCTYPE html>
<html>
<head>
  <title>Nix Privacy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8" name="viewport"content= "width=device-width, initial-scale=1.0"> 
    

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


body
{
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    /*background-color: #f1f9f9;*/
}

#app-cover
{
    display: table;
    width: 90px;
    margin: 0px auto;
    counter-reset: button-counter;
}

.row
{
    display: table-row;
}

.toggle-button-cover
{
    display: table-cell;
    position: relative;
    width: 200px;
    height: 50px;
    box-sizing: border-box;
}

./*button-cover
{
    height: 100px;
    margin: 20px;
    background-color: #fff;
    box-shadow: 0 10px 20px -8px #c5d6d6;
    border-radius: 4px;
}*/

.button-cover:before
{
    counter-increment: button-counter;
    content: counter(button-counter);
    position: absolute;
    right: 0;
    bottom: 0;
    color: #d7e3e3;
    font-size: 12px;
    line-height: 1;
    padding: 5px;
}

.button-cover, .knobs, .layer
{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.button
{
    position: relative;
    top: 50%;
    width: 74px;
    height: 36px;
    margin: -20px auto 0 auto;
    overflow: hidden;
}

.button.r, .button.r .layer
{
    border-radius: 100px;
}


.checkbox
{
    position: relative;
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
    opacity: 0;
    cursor: pointer;
    z-index: 3;
}

.knobs
{
    z-index: 2;
}

.layer
{
    width: 100%;
    background-color: #ebf7fc;
    transition: 0.3s ease all;
    z-index: 1;
}

/* Button 1 */
#button-1 .knobs:before
{
    content: 'YES';
    position: absolute;
    top: 4px;
    left: 4px;
    width: 35px;
    height: 30px;
    color: #fff;
    font-size: 10px;
    font-weight: bold;
    text-align: center;
    line-height: 1;
    padding: 9px 4px;
    background-color: #03A9F4;
    border-radius: 50%;
    transition: 0.3s cubic-bezier(0.18, 0.89, 0.35, 1.15) all;
}

#button-1 .checkbox:checked + .knobs:before
{
    content: 'NO';
    left: 42px;
    background-color: #f44336;
}

#button-1 .checkbox:checked ~ .layer
{
    background-color: #fcebeb;
}

#button-1 .knobs, #button-1 .knobs:before, #button-1 .layer
{
    transition: 0.3s ease all;
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
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>
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
<button type="button" class="btn btn-warning"><a href="Internal1.php" style="color: white"><span class="badge">2</span> Internal Data</a></button>
<!-- <button type="button" class="btn btn-info"><a href="" style="color: white"><span class="badge">3</span> History</a></button> -->
<button type="button" class="btn btn-danger"><a href="" style="color: white"><span class="badge">3</span> Financial</a></button>
<button type="button" class="btn btn-success"><a href="" style="color: white"><span class="badge">4</span> Social </a></button>
<hr>
                 
                    <div id="demo-accordion-collapse" role="tablist">

                      <div class="card">
                       <div class="card-header" role="tab" id="accord1">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-pane-1" role="button" aria-expanded="false" aria-controls="collapse-pane-1">
         Semi-uniquely
                      </a>
                       </div>
    <div id="collapse-pane-1" class="collapse show" role="tabpanel" aria-labelledby="accord1" data-parent="#demo-accordion-collapse">
      <div class="card-body">
      <div class="container-fluid">
        <h3>1.1 Information that uniquely or semi-uniquely identifies a specific individual.
</h3>
<div class="col-md-4 ">

<!-- <select class="selectpicker" name="mult[]" multiple="multiple" data-live-search="true"> -->

<table class="table">
  <tbody>
    <tr> 
      <th scope="row">Name</th>
      <td> <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="name" value="Name"></td>

  
    </tr>
    <tr>
      <th scope="row">User-name</th>
      <td>
        <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="un" value="User-Name"></td>
    </tr>
    <tr>
      <th scope="row">Picture</th>
      <td>
        <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="pic" value="Picture">
      </td>
    
</td>
    </tr>
      <tr>
      <th scope="row">Unique-identifier</th><td>
 <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="ui" value="Unique-identifier">
</td>

    </tr>
      <tr>
      <th scope="row">Biometric-data</th>
      <td >
   <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="bd" value="Biometric-data">
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
Ethnicity
        </a>
      </h5>
    </div>
   <div id="collapse-pane-2" class="collapse" role="tabpanel" aria-labelledby="accord2" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container-fluid">
              <h3>2.1 Information that describes an individual's origins and lineage</h3>
              <div class="col-md-4 ">
       <table class="table" >
  <tbody>
    <tr>
      <th scope="row">Race</th>
      <td> 
  <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="R" value="Race" data-width="70" data-height="32" >
      </td>
    </tr>
    <tr>
      <th scope="row">National or ethnic origin</th>
      <td>
  <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Ne" value="National or ethnic origin" data-width="70" data-height="32" >
      </td>
      

    </tr>
    <tr>
      <th scope="row">Languages spoken</th>
      <td>
  <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Ls" value="Languages spoken" data-width="70" data-height="32" >

</td>
    </tr>
      <tr>
      <th scope="row">Dialects</th>
      <td>
 <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Di" value="Dialects" data-width="70" data-height="32" >
</td>
    </tr>

      <tr>
      <th scope="row">Accents</th>
      <td>
 <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Ac" value="Accents" data-width="70" data-height="32" >
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
         Sexual
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
      <th scope="row">Gender Identity</th>
      <td> 
        <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="GI" value="Gender Identity" data-width="70" data-height="32" ></td>
  
    </tr>
    <tr>
      <th scope="row">Prefrences</th>
      <td>
       <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Pre" value="Prefrences" data-width="70" data-height="32" ></td>

    </tr>
    <tr>
      <th scope="row">proclivites</th>
      <td>
       <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Pro" value="proclivites" data-width="70" data-height="32" >
</td>
    </tr>
      <tr>
      <th scope="row">fetishes</th>
      <td>
 <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="fe" value="fetishes" data-width="70" data-height="32" >
</td>
    </tr>

      <tr>
      <th scope="row">History</th>
      <td >
    <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="history" value="History" data-width="70" data-height="32">
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
                              <table class="table">
  <tbody>
    <tr>
      <th scope="row">browsing behavior</th>
      <td>
       <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="BB" value="browsing behavior" data-width="70" data-height="32"></td>
  
    </tr>
    <tr>
      <th scope="row">Call logs</th>
      <td>
       <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="cl" value="Call logs" data-width="70" data-height="32"></td>

    </tr>
    <tr>
      <th scope="row">Links clicked</th>
      <td>
 <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Lc" value="Links clicked" data-width="70" data-height="32">
</td>
    </tr>
      <tr>
      <th scope="row">Dameanor</th><td>
 <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Da" value="Dameanor" data-width="70" data-height="32">
</td>
    </tr>
      <tr>
      <th scope="row">Attitude</th>
      <td >
  <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Attitude" value="Attitude" data-width="70" data-height="32">
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
     
                              <table class="table">
  <tbody>
    <tr>
      <th scope="row">Age Ranges</th>
      <td> 
    <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="AR" value="Age Ranges" data-width="70" data-height="32"></td>
  
    </tr>
    <tr>
      <th scope="row">Physical traits</th>
      <td> 
       <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Pt" value="Physical traits" data-width="70" data-height="32"></td>

    </tr>
    <tr>
      <th scope="row">Income bracketes</th>
      <td>
        <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="IB" value="Income bracketes" data-width="70" data-height="32">
</td>
    </tr>
      <tr>
      <th scope="row">Geographic</th><td>
<input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Ge" value="Geographic" data-width="70" data-height="32">
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
            <table class="table table-striped " style="width: 400px;">
  <tbody>
    <tr>
      <th scope="row">Physical and mental health</th>
      <td> 
      
        <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Pmh" value="Physical and mental health" data-width="70" data-height="32"></td>
  
    </tr>
    <tr>
      <th scope="row">Drug test results</th>
      <td> 
        <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Dtr" value="Drug test results" data-width="70" data-height="32"></td>

    </tr>
    <tr>
      <th scope="row">Disabilities</th>
      <td>

        <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Dis" value="Disabilities" data-width="70" data-height="32">
</td>
    </tr>
      <tr>
          <th scope="row">Family or individual health history</th>
          <td>
           <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Fih" value="Family or individual health history" data-width="70" data-height="32"></td>
    </tr>
      <tr>
      <th scope="row">Health records</th>
      <td >
        <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="HR" value="Health records" data-width="70" data-height="32">
</td>
</td>
    </tr>
        <tr>
      <th scope="row">blood types</th>
      <td > 
       <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="BT" value="blood types" data-width="70" data-height="32">
</td>
    </tr>
        <tr>
      <th scope="row">DNA code</th>
      <td >

       <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="HC" value="DNA code" data-width="70" data-height="32">
</td>
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


        <option value="Piercings"></option>
        

      <table class="table table-striped " style="width: 400px;">
  <tbody>
    <tr>
      <th scope="row">Height</th>
      <td>  
       <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Dei" value="Height" data-width="70" data-height="32"></td>
  
    </tr>
    <tr>
      <th scope="row">Weight</th>
      <td> 
       <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="WE" value="Weight" data-width="70" data-height="32">
     </td>

    </tr>
    <tr>
      <th scope="row">age</th>
      <td>
         <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="age" value="age" data-width="70" data-height="32">
</td>
    </tr>
      <tr>
          <th scope="row">Skin  tone</th>
          <td>
            <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Sk" value="Skin tone" data-width="70" data-height="32"></td>
    </tr>
      <tr>
      <th scope="row">Gender</th>
      <td >
        <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Gender" value="Gender" data-width="70" data-height="32">
    </tr>
        <tr>
      <th scope="row">Tattoos</th>
      <td >
       <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="tabl" value="tabl" data-width="70" data-height="32">
</td>
    </tr>
        <tr>
      <th scope="row">Piercings</th>
      <td >
        <input type="checkbox" checked data-toggle="toggle" data-on="YES" data-off="NO" name="Piercings" value="Piercings" data-width="70" data-height="32">
</td>
    </tr>
     
  </tbody>
</table>
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