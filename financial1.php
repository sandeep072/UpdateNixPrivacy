<?php 
include "connect.php";
if(isset($_POST['submit']))
{
       $CCN=$_POST['CCN'];
       $BA=$_POST['BA'];
       $Cars=$_POST['Cars'];
       $Houses=$_POST['Houses'];
       $Appartments=$_POST['Appartments'];
       $Purchases=$_POST['Purchases'];
       $Sales=$_POST['Sales'];
       $Credit=$_POST['Credit'];
       $Income=$_POST['Income'];
       $LR=$_POST['LR'];
       $Transactions=$_POST['Transactions'];
       $Textes=$_POST['Textes'];
       $SH=$_POST['SH'];
       $CR=$_POST['CR'];
       $CW=$_POST['CW'];
       $CS=$_POST['CS'];
       $CC=$_POST['CC'];
     $sql="INSERT INTO final(CCN,BA,Cars,Houses,Appartments,Purchases,Sales,Credit,Income,LR,Transactions,Textes,SH,CR,CW,CS,CC) 
     values('$CCN','$BA','$Cars','$Houses','$Appartments','$Purchases','$Sales','$Credit','$Income','$LR','$Transactions','$Textes','$SH','$CR','$CW','$CS','$CC')";
     if(mysqli_query($conn,$sql))
     {
    echo "successfully";
        header("Location:Social1.php");

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
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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
<!-- <button type="button" class="btn btn-info"><a href="" style="color: white"><span class="badge">3</span> History </a></button> -->
<button type="button" class="btn btn-danger"><a href="" style="color: white"><span class="badge">3</span> Financial <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a></button>
<button type="button" class="btn btn-success"><a href="" style="color: white"><span class="badge">4</span> Social </a></button>
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
        <h3>1.1 Information that identifies an individual's financial account</h3>
<div class="col-md-4 ">

  <table class="table">
  <tbody>
    <tr>
      <th scope="row">Credit card number</th>
      <td> 
    <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="CCN" value="Credit card number">
</td>
  
    </tr>
    <tr>
      <th scope="row">Bank Account</th>
      <td> 

        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="BA" value="Bank Account">
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
Ownership
        </a>
      </h5>
    </div>
   <div id="collapse-pane-2" class="collapse" role="tabpanel" aria-labelledby="accord2" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>2.1 Information about things an individual has owned,rented, borrowed, possessed</h3>
              <div class="col-md-4 ">
       
       <table class="table">
  <tbody>
    <tr>
      <th scope="row">Cars</th>
      <td> 

         <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Cars" value="Cars"data-width="70" data-height="32">
       </td>
  
    </tr>
    <tr>
      <th scope="row">Houses</th>
      <td> 
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Houses" value="Houses"data-width="70" data-height="32"></td>

    </tr>
    <tr>
      <th scope="row">Appartments</th>
      <td>
         <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Appartments" value="Appartments"data-width="70" data-height="32">
</td>
    </tr>
    <tr>
      <th scope="row">Personal possessions</th>
      <td>
     
    <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="PP" value="Personal possessions"data-width="70" data-height="32">
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
        Transactional
        </a>
      </h5>
    </div>
  <div id="collapse-pane-3" class="collapse" role="tabpanel" aria-labelledby="accord3" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container-fluid">
              <h3>3.1 Information about an individual's purchasing, spending or income</h3>
              <div class="col-md-4">
    
      <table class="table">
  <tbody>
    <tr>
      <th scope="row">Purchases</th>
      <td>  
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Purchases" value="Purchases"data-width="70" data-height="32"></td>
  
    </tr>
    <tr>
      <th scope="row">Sales</th>
      <td> 
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Sales" value="Sales"data-width="70" data-height="32"></td>

    </tr>
    <tr>
      <th scope="row">Credit</th>
      <td>
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Credit" value="Credit"data-width="70" data-height="32">
</td>
    </tr>
    <tr>
      <th scope="row">Income</th>
      <td> 
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Income" value="Income"data-width="70" data-height="32"></td>

    </tr>


      <tr>
      <th scope="row">Loan Record</th>
      <td> 
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="LR" value="Loan Record"data-width="70" data-height="32"></td>
  
    </tr>
    <tr>
      <th scope="row">Transactions</th>
      <td> 
    <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Transactions" value="Transactions"data-width="70" data-height="32"></td>

    </tr>
    <tr>
      <th scope="row">Texes</th>
      <td>
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Textes" value="Textes"data-width="70" data-height="32">
</td>
    </tr>
 
    <tr>
      <th scope="row">Spending habits</th>
      <td> 

       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="SH" value="Spending habits"data-width="70" data-height="32"></td>
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
Credit
        </a>
      </h5>
    </div>
   <div id="collapse-pane-4" class="collapse" role="tabpanel" aria-labelledby="accord4" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>4.1 Information about an individual's reputation with regards to money </h3>
              <div class="col-md-4 ">
<!--          
         <option value="Credit records">Credit records</option>
        <option value="Credit worthiness">Credit worthiness</option>
        <option value="Credit standing">Credit standing</option>
          <option value="Credit capacity">Credit capacity</option> -->

       <table class="table">
  <tbody>
    <tr>
      <th scope="row">Credit records</th>
      <td> 
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="CR" value="Credit records"data-width="70" data-height="32"></td>
  
    </tr>
    <tr>
      <th scope="row">Credit worthiness</th>
      <td> 
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="CW" value="Credit worthiness"data-width="70" data-height="32"></td>

    </tr>
    <tr>
      <th scope="row">Credit standing</th>
      <td>
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="CS" value="Credit standing"data-width="70" data-height="32">
</td>
    </tr>
    <tr>
      <th scope="row">Credit capacity</th>
      <td> 
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="CC" value="Credit capacity"data-width="70" data-height="32"></td>

    </tr>
      
  </tbody>
</table>

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