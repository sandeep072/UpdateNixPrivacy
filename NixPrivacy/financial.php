<?php
$conn=mysqli_connect("localhost","root","password","kick");

if(isset($_POST['submit']))
{

$m2=$_POST['Account'];
$a3=implode(",",$m2);

$m3=$_POST['Ownership'];
$b3=implode(",",$m3);

$m4=$_POST['Transactional'];
$c5=implode(",",$m4);

$m5=$_POST['Credit'];
$d6=implode(",",$m5);

$sql="INSERT INTO Financial(Account,Ownership,Transactional,Credit) values ('$a3','$b3','$c5','$d6')";
if(mysqli_query($conn,$sql))
{

echo "Successfully";
    header("Location:Social.php");
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
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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

  <a class="navbar-brand" href="#" style="color: white">Financial </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<!-- <div class="d-flex justify-content-center"><h3>What is the type of personal data you hold</h3></div>
 -->
<form  method="POST" action="">
<div class="container-fluid">
  <div class="row">
  <div class="container bg-light ">
  <div class="row">
              <div class="col-md-12">
                <div class="container-fluid">
                  <button type="button" class="btn btn-primary"><a href="" style="color: white"><span class="badge">1</span> External Data</a></button>
<button type="button" class="btn btn-warning"><a href="" style="color: white"><span class="badge">2</span> Internal Data</a></button>
<button type="button" class="btn btn-info"><a href="" style="color: white"><span class="badge">3</span> History </a></button>
<button type="button" class="btn btn-danger"><a href="" style="color: white"><span class="badge">4</span> Financial <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a></button>
<button type="button" class="btn btn-success"><a href="" style="color: white"><span class="badge">5</span> Social </a></button>
<hr>
                 
                    <div id="demo-accordion-collapse" role="tablist">

                      <div class="card">
                       <div class="card-header" role="tab" id="accord1">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-pane-1" role="button" aria-expanded="false" aria-controls="collapse-pane-1">
         Account
                      </a>
                       </div>
    <div id="collapse-pane-1" class="collapse show" role="tabpanel" aria-labelledby="accord1" data-parent="#demo-accordion-collapse">
      <div class="card-body">
      <div class="container-fluid">
        <h3>1.1Information that identifies an individual's financial account</h3>
<div class="col-md-4 ">
          <select class="selectpicker" name="Account[]" multiple data-live-search="true">
   <option value="Credit card number">Credit card number</option>
    <option value="Bank Account">Bank Account</option>
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
Ownership
        </a>
      </h5>
    </div>
   <div id="collapse-pane-2" class="collapse" role="tabpanel" aria-labelledby="accord2" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>2.1 Information about things an individual has owned,rented, borrowed, possessed</h3>
              <div class="col-md-4 ">
          <select class="selectpicker" name="Ownership[]" multiple data-live-search="true">
         
         <option value="Cars">Cars</option>
        <option value="Houses">Houses</option>
        <option value="Appartments">Appartments</option>
        <option value="Personal possessions">Personal possessions</option>
    
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
        Transactional
        </a>
      </h5>
    </div>
  <div id="collapse-pane-3" class="collapse" role="tabpanel" aria-labelledby="accord3" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container-fluid">
              <h3>3.1 Information about an individual's purchasing, spending or income</h3>
              <div class="col-md-4">
          <select class="selectpicker" name="Transactional[]" multiple data-live-search="true">
              
                <option value="Purchases">Purchases</option>
                <option value="Sales">Sales</option>
               <option value="Credit">Credit </option>
              <option value="Income">Income</option>
       <option value="Loan Record">Loan Record</option>
        <option value="Transactions">Transactions</option>
        <option value="Texes">Texes</option>
       <option value="Purchases">Purchases</option>
        <option value="Spending habits">Spending habits</option>
     
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
Credit
        </a>
      </h5>
    </div>
   <div id="collapse-pane-4" class="collapse" role="tabpanel" aria-labelledby="accord4" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>4.1 Information about an individual's reputation with regards to money </h3>
              <div class="col-md-4 ">
          <select class="selectpicker" name="Credit[]" multiple data-live-search="true">
            
         <option value="Credit records">Credit records</option>
        <option value="Credit worthiness">Credit worthiness</option>
        <option value="Credit standing">Credit standing</option>
          <option value="Credit capacity">Credit capacity</option>
  
     </select>
</div>
         </div>      
      </div>
  </div>
  </div>
<input type="submit" class="btn btn-success" value="Next" name="submit" style="margin-top:20px;" >
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