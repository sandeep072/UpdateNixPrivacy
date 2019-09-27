 <?php
$conn=mysqli_connect("localhost","root","password","kick");

if(isset($_POST['submit']))
{
$o=$_POST['history'];
$v=implode(",",$o);
$sql="INSERT INTO History(history) values ('$v')";
if(mysqli_query($conn,$sql))
{
      header("Location:financial.php");

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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
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

  <a class="navbar-brand" href="#" style="color: white">Historical </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<form method="POST" action="">
  <div class="container bg-light ">
  <div class="row">
              <div class="col-md-12">
                <div class="container-fluid">
                  <button type="button" class="btn btn-primary"><a href="" style="color: white"><span class="badge">1</span> External Data</a></button>
<button type="button" class="btn btn-warning"><a href="" style="color: white"><span class="badge">2</span> Internal Data</a></button>
<button type="button" class="btn btn-info"><a href="" style="color: white"><span class="badge">3</span> History <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a></button>
<button type="button" class="btn btn-danger"><a href="" style="color: white"><span class="badge">4</span> Financial</a></button>
<button type="button" class="btn btn-success"><a href="" style="color: white"><span class="badge">5</span> Social </a></button>
                 <hr>
                    <div id="demo-accordion-collapse" role="tablist">

                      <div class="card">
                       <div class="card-header" role="tab" id="accord1">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-pane-1" role="button" aria-expanded="false" aria-controls="collapse-pane-1">
 Life History
                      </a>
                       </div>
    <div id="collapse-pane-1" class="collapse show" role="tabpanel" aria-labelledby="accord1" data-parent="#demo-accordion-collapse">
      <div class="card-body">
      <div class="container-fluid">
        <h3>1.1 Information about an individual's personal history.</h3>
<div class="col-md-4 ">
          <select class="selectpicker" name="history[]" multiple data-live-search="true" >
   <option value="events that happened in a person's life, either to them or just around them which might have influenced ">events that happened in a person's life, either to them or just around them which might have influenced</option>
 </select>  
</div>
     </div>
      </div>
    </div>
  </div>  

<input type="submit" name="submit" class="btn btn-success" value="Next" style="margin-top:20px;">
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