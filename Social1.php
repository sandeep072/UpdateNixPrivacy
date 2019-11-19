<?php 
  include "connect.php";
if(isset($_POST['submit']))
{
     $JT=$_POST['JT'];
     $Salary=$_POST['Salary'];
     $WH=$_POST['WH'];
     $SA=$_POST['SA'];
     $EF=$_POST['EF'];
     $EH=$_POST['EH'];
     $Evaluations=$_POST['Evaluations'];
     $Re=$_POST['Re'];    
     $Interviews=$_POST['Interviews'];
     $Certifications=$_POST['Certifications'];
     $DAS=$_POST['DAS'];
     $Convictions=$_POST['Convictions'];
     $C=$_POST['C'];
    $Pardons=$_POST['Pardons'];
    $Sibilings=$_POST['Sibilings'];
  $Chr=$_POST['Chr'];
   $GR=$_POST['GR'];
   $SS=$_POST['SS'];
   $MS=$_POST['MS'];
   $Religion=$_POST['Religion'];
   $PA=$_POST['PA'];
   $Interactions=$_POST['Interactions'];
   $CMD=$_POST['CMD'];
   $FS=$_POST['FS'];
   $Offspring=$_POST['Offspring'];
   $Marriaes=$_POST['Marriaes'];
   $Divorces=$_POST['Divorces'];
 $Rp=$_POST['Rp'];
   $Friends=$_POST['Friends'];
   $Connections=$_POST['Connections'];
   $Acquaintances=$_POST['Acquaintances'];
  $GM=$_POST['GM'];
   $Associatioins=$_POST['Associatioins'];

   $VM=$_POST['VM'];
  $Email=$_POST['Email'];
     $TR=$_POST['TR'];

$sql="INSERT INTO sociall (JT,Salary,WH,SA,EF,EH,Evaluations,Re,Interviews,Certifications,DAS,Convictions,C,Pardons,Sibilings,Chr,GR,SS,MS,Religion,PA,Interactions,CMD,FS,Offspring,Marriaes,Divorces,Rp,Friends,Connections,Acquaintances,GM,Associatioins,VM,Email,TR)
values('$JT','$Salary','$WH','$SA','$EF','$EH','$Evaluations','$Re','$Interviews','$Certifications','$DAS','$Convictions','$C','$Pardons','$Sibilings','$Chr','$GR','$SS','$MS','$Religion','$PA','$Interactions','$CMD','$FS','$Offspring','$Marriaes','$Divorces','$Rp','$Friends','$Connections','$Acquaintances','$GM','$Associatioins','$VM','$Email','$TR')";
 if(mysqli_query($conn,$sql))
{
  echo "Successfully";
 header("Location:Todata_result.php");

    
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
<!-- <button type="button" class="btn btn-info"><a href="" style="color: white"><span class="badge">3</span> History</a></button> -->
<button type="button" class="btn btn-danger"><a href="" style="color: white"><span class="badge">3</span> Financial</a></button>
<button type="button" class="btn btn-success"><a href="" style="color: white"><span class="badge">4</span> Social <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a></button>
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
    

        <table class="table">
  <tbody>
    <tr>

      <th scope="row">Job titles</th>
      <td> 
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="JT" value="Job titles">
</td>
  
    </tr>
    <tr>
      <th scope="row">Salary</th>
      <td> 
         <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Salary" value="Salary">
          </td>

    </tr>
    <tr>
      <th scope="row">Work history</th>
      <td>    
    <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="WH" value="Work history">
</td>
    </tr>
     <tr>
      <th scope="row">School attended</th>
      <td> 
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="SA" value="School Attended">
 </td>
  
    </tr>
    <tr>
      <th scope="row">Employee files</th>
      <td>   
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="EF" value="Employee files">
</td>

    </tr>
    <tr>
      <th scope="row">Employmnt history</th>
      <td>
     <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="EH" value="Employmnt history">

</td>

    </tr>
     <tr>
      <th scope="row">Evaluations</th>
      <td>     
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Evaluations" value="Evaluations">
</td>
  
    </tr>
    <tr>
      <th scope="row">References</th>
      <td>
             <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Re" value="References">
 </td>

    </tr>
    <tr>
      <th scope="row">Interviews</th>
      <td>
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Interviews" value="Interviews">

</td>
    </tr>
      <tr>
      <th scope="row">Certifications</th>
      <td>  
         <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Certifications" value="Certifications">
 </td>

    </tr>
    <tr>
      <th scope="row">Disciplinary actions</th>
      <td>
          <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="DAS" value="Disciplinary actions">

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
Criminal
        </a>
      </h5>
    </div>
   <div id="collapse-pane-2" class="collapse" role="tabpanel" aria-labelledby="accord2" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>2.1 Information about an individual's criminal activity</h3>
              <div class="col-md-4 ">
        <!--   <select class="selectpicker" name="Criminal[]" multiple data-live-search="true">
         <option value="Convictions">Convictions</option>
        <option value="Charges">Charges</option>
        <option value="Pardons">Pardons</option>
     </select> -->

            <table class="table">
  <tbody>
    <tr>
      <th scope="row">Convictions</th>
      <td>  
     <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Convictions" value="Convictions"data-width="70" data-height="32"></td>
  
    </tr>
    <tr>
      <th scope="row">Charges</th>
      <td>
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="C" value="Charges"data-width="70" data-height="32"> </td>

    </tr>
    <tr>
      <th scope="row">Pardons</th>
      <td>
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Pardons" value="Pardons"data-width="70" data-height="32">
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
        Public Life
        </a>
      </h5>
    </div>
  <div id="collapse-pane-3" class="collapse" role="tabpanel" aria-labelledby="accord3" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container-fluid">
              <h3>3.1 Information about an individual's public life</h3>
              <div class="col-md-4">
        <!--   <select class="selectpicker" name="Public[]" multiple data-live-search="true">
                <option value="Character">Character</option>
                <option value="General Reputation">General Reputation</option>
               <option value="Social status">Social status</option>
              <option value="Marital status">Marital status</option>
       <option value="Religion">Religion</option>
        <option value="Political affiliations">Political affiliations</option>
        <option value="Interactions">Interactions</option>
       <option value="Communications meta-data">Communications meta-data</option>  
 </select> -->
    <table class="table" style="width: 400px;">
  <tbody>
    <tr>
      <th scope="row">Character</th>
      <td>
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Chr" value="Character"data-width="70" data-height="32"></td>
  
    </tr>
    <tr>
      <th scope="row">General Reputation</th>
      <td> 
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="GR" value="General Reputation"data-width="70" data-height="32"> </td>

    </tr>
    <tr>
      <th scope="row">Social status</th>
      <td>
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="SS" value="Social status"data-width="70" data-height="32"> 
</td>
    </tr>
    <tr>
      
    
      <th scope="row">Marital status</th>
      <td> 
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="MS" value="Marital status"data-width="70" data-height="32">  </td>

    </tr>
    <tr>
      <th scope="row">Religion</th>
      <td>
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Religion" value="Religion"data-width="70" data-height="32"> 
</td>
    </tr>
       <tr>
      <th scope="row">Political affiliations</th>
      <td>
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="PA" value="Political affiliations"data-width="70" data-height="32"> 
</td>
    </tr>
     <tr>
      <th scope="row">Interactions</th>
      <td>
      <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Interactions" value="Interactions"data-width="70" data-height="32"> 
</td>
    </tr>
       <tr>
      <th scope="row">Communications meta-data</th>
      <td>
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="CMD" value="Communications meta-data"data-width="70" data-height="32">
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
Family
        </a>
      </h5>
    </div>
   <div id="collapse-pane-4" class="collapse" role="tabpanel" aria-labelledby="accord4" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>4.1 Information about an individual's family and relationships</h3>
              <div class="col-md-4 ">

            <table class="table">
  <tbody>
    <tr>
      <th scope="row">Family structure</th>
      <td>  
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="FS" value="Family structure"data-width="70" data-height="32"> </td>
  
    </tr>
    <tr>
      <th scope="row">Sibilings</th>
 <td>  
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Sibilings" value="Sibilings"data-width="70" data-height="32"> </td>
  
    </tr>
    <tr>
      <th scope="row">Offspring</th>
      <td>
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Offspring" value="Offspring"data-width="70" data-height="32">
</td>
    </tr>

    <tr>
      <th scope="row">Marriaes</th>
      <td>
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Marriaes" value="Marriaes"data-width="70" data-height="32"> </td>

    </tr>
    <tr>
      <th scope="row">Divorces</th>
      <td>
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Divorces" value="Divorces"data-width="70" data-height="32">
</td>
    </tr>
       <tr>
      <th scope="row">Relationship</th>
      <td>
          <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Rp" value="Relationship"data-width="70" data-height="32">
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


            <table class="table">
  <tbody>
    <tr>
      <th scope="row">Friends</th>
      <td> 
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Friends" value="Friends"data-width="70" data-height="32">
         </td>
  
    </tr>
    <tr>
      <th scope="row">Connections</th>
      <td>
      <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Connections" value="Connections"data-width="70" data-height="32"></td>

    </tr>
    <tr>
      <th scope="row">Acquaintances</th>
      <td>
           <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Acquaintances" value="Acquaintances"data-width="70" data-height="32">
</td>
    </tr>
    <tr>
      <th scope="row">Groups membership</th>
      <td>
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="GM" value="Groups membership"data-width="70" data-height="32"> </td>

    </tr>
    <tr>
      <th scope="row">Associatioins</th>
      <td> 
        <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Associatioins" value="Associatioins"data-width="70" data-height="32">
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
<!--           <select class="selectpicker" name="Communication[]" multiple data-live-search="true">
         <option value="Telephone Recording">Telephone Recording</option>
        <option value="Voice mail">Voice mail</option>
        <option value="Email">Email</option>
     </select> -->

            <table class="table">
  <tbody>
    <tr>
      <th scope="row">Telephone Recording</th>
      <td>  
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="TR" value="Telephone Recording"data-width="70" data-height="32"> </td>
  
    </tr>
    <tr>
      <th scope="row">Voice mail</th>
      <td> 
       <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="VM" value="Voice mail"data-width="70" data-height="32">
        </td>

    </tr>
    <tr>
      <th scope="row">Email</th>
      <td> <input type="checkbox"  data-toggle="toggle" data-on="YES" data-off="NO" name="Email" value="Email"data-width="70" data-height="32">
</td>
    </tr>
      
  </tbody>
</table>


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