
<!DOCTYPE html>
<html>
<head>
  <title>Nix Privacy</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

   <style>
.donate-now {
     list-style-type:none;
     margin:25px 0 0 0;
     padding:0;

}

.donate-now li {
     float:left;
     margin:0 5px 10px 0;
    width:100px;
    height:45px;
    position:relative;
}

.donate-now label, .donate-now input {
    /*display:block;*/
    position:absolute;
    top:0;
    left:1px;
    right:0;
    bottom:0;

}
 
   
.donate-now input[type="radio"] {
    opacity:0.01;
    z-index:100;
      padding: 15px;
    border-radius: 15px;
    left: 50px;
  
}

.donate-now input[type="radio"]:checked + label,
.Checked + label {
    background:#C0C0C0 ;
     border-color: #216582;
        padding: 8px;
  border-radius: 25px;
   width: 100px;
}

.donate-now label {
     padding:5px;
     border:1px solid #CCC; 
     cursor:pointer;
    z-index:100;
     border-color: #216582;
}

.donate-now label:hover {
     background:lightgray;
}

@media (max-width: 767px)
.page-container {
    margin: 0!important;
    padding: 0;
}

</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
    <a href="dashboard.php"><img src="nix.png" alt="nix" style="width: 45px;height: 45px;"></a>

  <a class="navbar-brand" href="#" style="color: white">Details </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>


<div class="container-fluid">
  <div class="row">
     <div class="col-md-2">
            <div class="vertical-menu">
 <div class="dropdown">
    <button class="btn btn-md" type="button" data-toggle="dropdown">Self Assessment
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="demo_control.php">Controller Processor</a></li>
      <li><a href="principle.php">Principles Alignment</a></li>
      <li><a href="details.php">Detailed Assessment</a></li>
    </ul>
    </div>
    <div class="dropdown">
    <button class="btn" type="button" data-toggle="dropdown">GDPR Internal Audit
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="plan1.html">Plan Audit</a></li>
      <li><a href="#">Review Audit</a></li>
      <li><a href="#">Report</a></li>
      <li><a href="#">Action Plan</a></li>
    </ul>
</div>
  <div class="dropdown">
    <button class="btn" type="button" data-toggle="dropdown">Data Mapping
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="datat.php">Type of data</a></li>
      <li><a href="#">Mapping</a></li>
    </ul>
</div>
</div> 
            </div>

  <div class="container">
  <div class="row">
    <div class="col-md-10 bg-light">
      <h3>Lawful basic for Processing</h3>
<table class="table table-bordered ">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Activity</th> 
      <th scope="col">Target Date</th>
      <th scope="col">Importance</th>
      <th scope="col">Assign Checklists</th>
     
  
    </tr>
  </thead>
 
  <tbody>
    <tr>
      <td>1</td>
      <td>Review of all processing Activities related to dept</td>
      <td><script>
         var d=new Date();
         var n=d.toLocaleDateString();
         document.write(n);

      </script></td>
      <td>
        <div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
  <p>Value: <span id="demo"></span></p>
</div>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

      </td>
      <td><div class="form-group">
        <div class="row">
        <div class="col-md-6">
            <label for="exampleSelectd">Auditor</label>
            <select class="form-control" id="exampleSelectd">
              <option></option>
              <option>auditor</option>
                            
            </select>
    </div>
    <div class="col-md-6">
            <label for="exampleSelectd">Auditee</label>
            <select class="form-control" id="exampleSelectd">
              <option></option>
              <option>auditee</option>
                            
            </select>
    </div>

        </div>
        </div>

      </td>
    
     
    </tr>
      <tr>
      <td>2</td>
      <td>Must Appropriate Lawfull baisc Selected</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
   
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div> 


</body>
</html>