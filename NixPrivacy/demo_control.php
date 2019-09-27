<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
    <a href="dashboard.php"><img src="nix.png" alt="nix" style="width: 45px;height: 45px;"></a>

  <a class="navbar-brand" href="#" style="color: white">Controllers Processors</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="container-fluid">
  <div class="row ">
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
      <li><a href="#">Plan Audit</a></li>
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

  <div class="container bg-light">
  <div class="row">
  <div class="col-md-10">
     <h2>Controller/Joint-controller/Processor</h2>
     
</div>

<div class="row">
<div class="col-md-12">
    
</div>
</div>
 <div class="col-md-10 ">
<div class="panel panel-default">
   <div class="controller" style="margin-top: 10px;margin-left: 10px;">
    <div class="row">
      <div class="col-md-3">
              <label for="comment">Processing activity:</label>

      <textarea class="form-control" rows="1" cols="1" id="comment" placeholder="eg:-"></textarea>
    </div>
     <div class="col-md-3">
            <label for="comment">Purpose:</label>

      <textarea class="form-control" rows="1" cols="1" id="comment" placeholder="eg:-"></textarea>
    </div>
    </div>
    </div>
  
<h3>Controller</h3>

    <div  class="panel-body mb-6">We decided to collect or process the personal data.<br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency" value="YES" id="a" class="deselectRadioButton" >YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
    </div>


    <div class="panel-body">We decided what the purpose or outcome of the processing was to be.<br><br>
       <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency1" value="YES" id="b" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency1" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency1" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
    </div>



      <div class="panel-body"> We decided what personal data should be collected.<br><br>
 <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white color: white" >
      <input type="radio" name="frequency2" value="YES" id="c" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency2" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency2" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

    <div class="panel-body">We decided which individuals to collect personal data about.
    <br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency3" value="YES" id="d" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency3" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency3" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
     </div>

      <div class="panel-body">We obtain a commercial gain or other benefit from the processing, except for any payment for services from another controller.
      <br><br>
  <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency4" value="YES" id="e" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency4" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency4" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

    <div class="panel-body">We are processing the personal data as a result of a contract between us and the data subject.
    <br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency5" value="YES" id="f" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency5" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency5" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body">The data subjects are our employees.<br><br>
 <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency6" value="YES" id="g" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency6" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency6" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

    <div class="panel-body">We make decisions about the individuals concerned as part of or as a result of the processing.<br><br>
 <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency7" value="YES" id="h" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency7" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency7" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body"> We exercise professional judgement in the processing of the personal data.<br><br>
    <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency8" value="YES" id="i" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency8" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency8" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
     </div>

    <div class="panel-body">We have a direct relationship with the data subjects.<br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency9" value="YES" id="j" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency9" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency9" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body">We have complete autonomy as to how the personal data is processed.<br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency10" value="YES" id="k" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency10" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency10" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

    <div class="panel-body">We have appointed the processors to process the personal data on our behalf.<br><br>

  <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency11" value="YES"id="l" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency11" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency11" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>
<h3>Jont_controller</h3>
      <div class="panel-body">We have a common objective with others regarding the processing.<br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency12" value="YES"  id ="m" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency12" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency12" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

    <div class="panel-body">We are processing the personal data for the same purpose as another controller.
<br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency13" value="YES" id="n" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency13" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency13" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body">We are using the same set of personal data (eg one database) for this processing as another controller.<br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency14" value="YES" id="o" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency14" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency14" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
     </div>

    <div class="panel-body">We have designed this process with another controller.<br><br>
    <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency15" value="YES" id="p" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency15" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency15" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

      <div class="panel-body">We have common information management rules with another controller.<br><br>
  <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency16" value="YES" id="q" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency16" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency16" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>
  <h3>Processor</h3>
    <div class="panel-body">We are following instructions from someone else regarding the processing of personal data.<br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency17" value="YES" id="r"class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency17" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency17" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

     <div class="panel-body">We were given the personal data by a customer or similar third party, or told what data to collect.<br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency18" value="YES" id="s"class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency18" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency18" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

    <div class="panel-body">We do not decide to collect personal data from individuals.<br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency19" value="YES" id="t" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency19" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency19" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body">We do not decide what personal data should be collected from individuals.<br><br>
 <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency20" value="YES" id="u" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency20" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency20" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

    <div class="panel-body"> We do not decide the lawful basis for the use of that data.<br><br>
  <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency21" value="YES" id="v"class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency21" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency21" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body"> We do not decide what purpose or purposes the data will be used for.<br><br>
<div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency22" value="YES" id="w" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency22" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency22" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

    <div class="panel-body">We do not decide whether to disclose the data, or to whom.<br><br>
     <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency23" value="YES" id="x" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency23" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency23" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

     <div class="panel-body">We do not decide how long to retain the data.<br><br>
     <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency24" value="YES" id="y" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency24" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency24" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>


     <div class="panel-body"> We may make some decisions on how data is processed, but implement these decisions under a contract with someone else.<br><br>

 <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency25" value="YES" id="z"class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency25" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency25" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

    <div class="panel-body">We are not interested in the end result of the processing.<br><br>
  <div class="col-md-2">
   <label class="radio-inline form-control" style="background:#449D45;margin-left:-5px;color: white" >
      <input type="radio" name="frequency26" value="YES" id="a7" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #C9302C;margin-left:-5px;color: white" >
      <input type="radio" name="frequency26" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline form-control" style="background: #5bc0de;margin-left:-5px;color: white" >
      <input type="radio" name="frequency26" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>
     
  </div>
</div>

</div>
</div>
</div>
<button type="button" class="btn btn-success" style="margin-left: 270px;" onclick="sum()">Submit</button>
</div>
</body>
</html>
<script type="text/javascript" src="sum.js"></script>

