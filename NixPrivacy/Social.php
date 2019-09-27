 <?php
$conn=mysqli_connect("localhost","root","password","kick");

if(isset($_POST['submit']))
{

$mult7=$_POST['professional'];
$a=implode(",",$mult7);

$mult8=$_POST['Criminal'];
$b=implode(",",$mult8);

$mult5=$_POST['Public'];
$c=implode(",",$mult5);

$mult1=$_POST['Family'];
$d=implode(",",$mult1);

$m1=$_POST['Social'];
$e=implode(",",$m1);

$m2=$_POST['Communication'];
$f=implode(",",$m2);


$sql="INSERT INTO Social(professional,Criminal,Public,Family,Social,Communication) values ('$a','$b','$c','$d','$e','$f')";
if(mysqli_query($conn,$sql))
{
  echo "successfull";
    header("Location:datat_result.php");
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

  <a class="navbar-brand" href="#" style="color: white">Social</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>


<form action="" method="POST">
  <div class="container bg-light ">
  <div class="row">
              <div class="col-md-12">
                <div class="container-fluid">
                  <button type="button" class="btn btn-primary"><a href="" style="color: white"><span class="badge">1</span> External Data </a></button>
<button type="button" class="btn btn-warning"><a href="" style="color: white"><span class="badge">2</span> Internal Data</a></button>
<button type="button" class="btn btn-info"><a href="" style="color: white"><span class="badge">3</span> History</a></button>
<button type="button" class="btn btn-danger"><a href="" style="color: white"><span class="badge">4</span> Financial</a></button>
<button type="button" class="btn btn-success"><a href="" style="color: white"><span class="badge">5</span> Social <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a></button>
<hr>
                 
                    <div id="demo-accordion-collapse" role="tablist">

                      <div class="card">
                       <div class="card-header" role="tab" id="accord1">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-pane-1" role="button" aria-expanded="false" aria-controls="collapse-pane-1">
          Professional
                      </a>
                       </div>
    <div id="collapse-pane-1" class="collapse show" role="tabpanel" aria-labelledby="accord1" data-parent="#demo-accordion-collapse">
      <div class="card-body">
      <div class="container-fluid">
        <h3>1.1 Information about an individual's educational or professional career</h3>
<div class="col-md-4 ">
          <select class="selectpicker" name="professional[]" multiple data-live-search="true">

   <option value="Job titles">Job titles</option>
    <option value="Salary">Salary </option>
    <option value="Work history">Work history</option>
    <option value="School attended">School attended</option>
    <option value="Employee files">Employee files</option>
    <option value="Employmnt history">Employmnt history</option>
    <option value="Evaluations">Evaluations</option>
    <option value="References">References</option>
    <option value="Interviews">Interviews</option>
    <option value="Certifications">Certifications</option>
    <option value="Disciplinary actions">Disciplinary actions</option>
    
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
Criminal
        </a>
      </h5>
    </div>
   <div id="collapse-pane-2" class="collapse" role="tabpanel" aria-labelledby="accord2" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>2.1 Information about an individual's criminal activity</h3>
              <div class="col-md-4 ">
          <select class="selectpicker" name="Criminal[]" multiple data-live-search="true">
         <option value="Convictions">Convictions</option>
        <option value="Charges">Charges</option>
        <option value="Pardons">Pardons</option>
      
    
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
        Public Life
        </a>
      </h5>
    </div>
  <div id="collapse-pane-3" class="collapse" role="tabpanel" aria-labelledby="accord3" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container-fluid">
              <h3>3.1 Information about an individual's public life</h3>
              <div class="col-md-4">
          <select class="selectpicker" name="Public[]" multiple data-live-search="true">
                <option value="Character">Character</option>
                <option value="General Reputation">General Reputation</option>
               <option value="Social status">Social status</option>
              <option value="Marital status">Marital status</option>
       <option value="Religion">Religion</option>
        <option value="Political affiliations">Political affiliations</option>
        <option value="Interactions">Interactions</option>
       <option value="Communications meta-data">Communications meta-data</option>  
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
Family
        </a>
      </h5>
    </div>
   <div id="collapse-pane-4" class="collapse" role="tabpanel" aria-labelledby="accord4" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>4.1 Information about an individual's family and relationships</h3>
              <div class="col-md-4 ">
          <select class="selectpicker" name="Family[]" multiple data-live-search="true">
         <option value="Family structure">Family structure</option>
        <option value="Sibilings">Sibilings</option>
        <option value="Offspring">Offspring</option>
          <option value="Marriaes">Marriaes</option>
          <option value="Divorces">Divorces</option>
          <option value="Relationship">Relationship</option>
  
  
     </select>
</div>
         </div>      
      </div>
  </div>
  </div>


            <div class="card">
    <div class="card-header" role="tab1" id="accord5">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-5" role="button" aria-expanded="false" aria-controls="collapse-pane-4">
Social Network
        </a>
      </h5>
    </div>
   <div id="collapse-pane-5" class="collapse" role="tabpanel" aria-labelledby="accord5" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>5.1 Information about an individual's friends or social connections </h3>
              <div class="col-md-4 ">
          <select class="selectpicker" name="Social[]" multiple data-live-search="true">
         <option value="Friends">Friends</option>
        <option value="Connections">Connections</option>
        <option value="Acquaintances">Acquaintances</option>
          <option value="Associatioins">Associatioins</option>
          <option value="Groups membership">Groups membership</option>  
     </select>
</div>
         </div>      
      </div>
  </div>
  </div>


            <div class="card">
    <div class="card-header" role="tab1" id="accord6">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-6" role="button" aria-expanded="false" aria-controls="collapse-pane-">
Communication
        </a>
      </h5>
    </div>
   <div id="collapse-pane-6" class="collapse" role="tabpanel" aria-labelledby="accord6" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>6.1 Information communicated from or to an individual </h3>
              <div class="col-md-4 ">
          <select class="selectpicker" name="Communication[]" multiple data-live-search="true">
         <option value="Telephone Recording">Telephone Recording</option>
        <option value="Voice mail">Voice mail</option>
        <option value="Email">Email</option>
         
  
     </select>
</div>
         </div>      
      </div>
  </div>
  </div>
<input type="submit" class="btn btn-success" style="margin-top:20px;" name="submit" value="Submit">
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