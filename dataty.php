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
      <td>  <input type="radio" name="name" value="Name"> &nbsp;YES</td>
      <td>   <input type="radio" name="name"> &nbsp;NO</td>
  
    </tr>
    <tr>
      <th scope="row">User-name</th>
      <td> <input type="radio" name="un" value="User-Name"> &nbsp;YES</td>
      <td> <input type="radio" name="un" value="User-Name"> &nbsp;NO</td>

    </tr>
    <tr>
      <th scope="row">Picture</th>
      <td><input type="radio" name="pic" value="Picture"> &nbsp;YES</td>
      <td><input type="radio" name="pic" value="Picture"> &nbsp;NO
</td>
    </tr>
      <tr>
      <th scope="row">Unique-identifier</th><td>
<input type="radio" name="ui" value="Unique-Identier"> &nbsp;YES</td>
<td><input type="radio" name="ui" value="Unique-Identier"> &nbsp;NO</td>
    </tr>
      <tr>
      <th scope="row">Biometric-data</th>
      <td ><input type="radio" name="bd" value="Biometric-data"> &nbsp;YES
</td>
           <td> <input type="radio" name="bd" value="Biometric-data"> &nbsp;NO

</td>
    </tr>
  </tbody>
</table>
  <!-- <p><b>Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> <label class="radio-inline"> 
      <p><b>User-name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> <label class="radio-inline">
      <input type="radio" name="un" value="User-Name">YES
    
    <label class="radio-inline">
      <input type="radio" name="ui" value="Unique-Identier">NO
    </label> </p>
    <hr>

        <p><b>Biometric-data: &nbsp;&nbsp;<b> <label class="radio-inline">
      <input type="radio" name="bd" value="Biometric-data">YES
    </label>
    <label class="radio-inline">
      <input type="radio" name="bd" value="Biometric-data">NO
    </label> </p>
   -->
  <!-- 
      Picture
      Biometric data -->
 <!-- </select>   -->

   

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
       <table class="table">
  <tbody>
    <tr>
      <th scope="row">Race</th>
      <td>  <input type="radio" name="R" value="Race"> &nbsp;YES</td>
      <td>   <input type="radio" name="R"> &nbsp;NO</td>
  
    </tr>
    <tr>
      <th scope="row">National or ethnic origin</th>
      <td> <input type="radio" name="Ne" value="National or ethnic origin"> &nbsp;YES</td>
      <td> <input type="radio" name="Ne" value="National or ethnic origin"> &nbsp;NO</td>

    </tr>
    <tr>
      <th scope="row">Languages spoken</th>
      <td><input type="radio" name="Ls" value="Languages spoken"> &nbsp;YES</td>
      <td><input type="radio" name="Ls" value="Languages spoken"> &nbsp;NO
</td>
    </tr>
      <tr>
      <th scope="row">Dialects</th><td>
<input type="radio" name="Di" value="Dialects"> &nbsp;YES</td>
<td><input type="radio" name="Di" value="Dialects"> &nbsp;NO</td>
    </tr>
      <tr>
      <th scope="row">Accents</th>
      <td ><input type="radio" name="Ac" value="Accents"> &nbsp;YES
</td>
           <td> <input type="radio" name="Ac" value="Accents"> &nbsp;NO

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
      <td>  <input type="radio" name="GI" value="Gender Identity"> &nbsp;YES</td>
      <td>   <input type="radio" name="GI" value="Gender Identity"> &nbsp;NO</td>
  
    </tr>
    <tr>
      <th scope="row">Prefrences</th>
      <td> <input type="radio" name="Pre" value="Prefrences"> &nbsp;YES</td>
      <td> <input type="radio" name="Pre" value="Prefrences"> &nbsp;NO</td>

    </tr>
    <tr>
      <th scope="row">proclivites</th>
      <td><input type="radio" name="Pro" value="proclivites"> &nbsp;YES</td>
      <td><input type="radio" name="Pro" value="proclivites"> &nbsp;NO
</td>
    </tr>
      <tr>
      <th scope="row">fetishes</th><td>
<input type="radio" name="fe" value="fetishes"> &nbsp;YES</td>
<td><input type="radio" name="fe" value="fetishes"> &nbsp;NO</td>
    </tr>
      <tr>
      <th scope="row">History</th>
      <td ><input type="radio" name="history" value="History"> &nbsp;YES
</td>
           <td> <input type="radio" name="history" value="History"> &nbsp;NO

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
      <td>  <input type="radio" name="BB" value="browsing behavior"> &nbsp;YES</td>
      <td>   <input type="radio" name="BB" value="browsing behavior"> &nbsp;NO</td>
  
    </tr>
    <tr>
      <th scope="row">Call logs</th>
      <td> <input type="radio" name="cl" value="Call logs"> &nbsp;YES</td>
      <td> <input type="radio" name="cl" value="Call logs"> &nbsp;NO</td>

    </tr>
    <tr>
      <th scope="row">Links clicked</th>
      <td><input type="radio" name="Lc" value="Links clicked"> &nbsp;YES</td>
      <td><input type="radio" name="Lc" value="Links clicked"> &nbsp;NO
</td>
    </tr>
      <tr>
      <th scope="row">Dameanor</th><td>
<input type="radio" name="Da" value="Dameanor"> &nbsp;YES</td>
<td><input type="radio" name="Da" value="Dameanor"> &nbsp;NO</td>
    </tr>
      <tr>
      <th scope="row">Attitude</th>
      <td ><input type="radio" name="Attitude" value="Attitude"> &nbsp;YES
</td>
           <td> <input type="radio" name="Attitude" value="Attitude"> &nbsp;NO

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
      <td>  <input type="radio" name="AR" value="Age Ranges"> &nbsp;YES</td>
      <td>   <input type="radio" name="AR" value="Age Ranges"> &nbsp;NO</td>
  
    </tr>
    <tr>
      <th scope="row">Physical traits</th>
      <td> <input type="radio" name="Pt" value="Physical traits"> &nbsp;YES</td>
      <td> <input type="radio" name="Pt" value="Physical traits"> &nbsp;NO</td>

    </tr>
    <tr>
      <th scope="row">Income bracketes</th>
      <td><input type="radio" name="IB" value="Income bracketes"> &nbsp;YES</td>
      <td><input type="radio" name="IB" value="Income bracketes"> &nbsp;NO
</td>
    </tr>
      <tr>
      <th scope="row">Geographic</th><td>
<input type="radio" name="Ge" value="Geographic"> &nbsp;YES</td>
<td><input type="radio" name="Ge" value="Geographic"> &nbsp;NO</td>
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
      <td>  <input type="radio" name="Pmh" value="Physical and mental health"> &nbsp;YES</td>
      <td>   <input type="radio" name="Pmh" value="Physical and mental health"> &nbsp;NO</td>
  
    </tr>
    <tr>
      <th scope="row">Drug test results</th>
      <td> <input type="radio" name="Dtr" value="Drug test results"> &nbsp;YES</td>
      <td> <input type="radio" name="Dtr" value="Drug test results"> &nbsp;NO</td>

    </tr>
    <tr>
      <th scope="row">Disabilities</th>
      <td><input type="radio" name="Dis" value="Disabilities"> &nbsp;YES</td>
      <td><input type="radio" name="Dis" value="Disabilities"> &nbsp;NO
</td>
    </tr>
      <tr>
          <th scope="row">Family or individual health history</th>
          <td><input type="radio" name="Fih" value="Family or individual health history"> &nbsp;YES</td>
          <td><input type="radio" name="Fih" value="Family or individual health history"> &nbsp;NO</td>
    </tr>
      <tr>
      <th scope="row">Health records</th>
      <td ><input type="radio" name="HR" value="Health records"> &nbsp;YES
</td>
           <td> <input type="radio" name="HR" value="Health records"> &nbsp;NO
</td>
    </tr>
        <tr>
      <th scope="row">blood types</th>
      <td ><input type="radio" name="BT" value="blood types"> &nbsp;YES
</td>
           <td> <input type="radio" name="BT" value="blood types"> &nbsp;NO
</td>
    </tr>
        <tr>
      <th scope="row">DNA code</th>
      <td ><input type="radio" name="HC" value="DNA code"> &nbsp;YES
</td>
           <td> <input type="radio" name="HC" value="DNA code"> &nbsp;NO
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
      <td>  <input type="radio" name="Dei" value="Height"> &nbsp;YES</td>
      <td>   <input type="radio" name="Dei" value="Height"> &nbsp;NO</td>
  
    </tr>
    <tr>
      <th scope="row">Weight</th>
      <td> <input type="radio" name="WE" value="Weight"> &nbsp;YES</td>
      <td> <input type="radio" name="WE" value="Weight"> &nbsp;NO</td>

    </tr>
    <tr>
      <th scope="row">age</th>
      <td><input type="radio" name="age" value="age"> &nbsp;YES</td>
      <td><input type="radio" name="age" value="age"> &nbsp;NO
</td>
    </tr>
      <tr>
          <th scope="row">Skin  tone</th>
          <td><input type="radio" name="Sk" value="Skin tone"> &nbsp;YES</td>
          <td><input type="radio" name="Sk" value="Skin tone"> &nbsp;NO</td>
    </tr>
      <tr>
      <th scope="row">Gender</th>
      <td ><input type="radio" name="Gender" value="Gender"> &nbsp;YES
</td>
           <td> <input type="radio" name="Gender" value="Gender"> &nbsp;NO
</td>
    </tr>
        <tr>
      <th scope="row">Tattoos</th>
      <td ><input type="radio" name="tabl" value="Tattoos"> &nbsp;YES
</td>
           <td> <input type="radio" name="tabl" value="Tattoos"> &nbsp;NO
</td>
    </tr>
        <tr>
      <th scope="row">Piercings</th>
      <td ><input type="radio" name="Piercings" value="Piercings"> &nbsp;YES
</td>
           <td> <input type="radio" name="Piercings" value="Piercings"> &nbsp;NO
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