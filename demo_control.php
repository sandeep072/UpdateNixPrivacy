
<!DOCTYPE html>
<html>
<head>
  <title>Nix Privacy</title>
     <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0"> 

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">



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
      <li><a href="External.php">Type of data</a></li>
      <li><a href="#">Mapping</a></li>
    </ul>
</div> 
</div>

  <div class="container bg-light d-flex justify-content-center">
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
  


    <div  class="panel-body mb-6">We decided to collect or process the personal data.<br><br>
<div class="col-md-2">
   <label class="radio-inline1 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency" value="YES" id="a" class="deselectRadioButton" >YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline71 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency" value="NO" id="a1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline72 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency" value="NOT SURE" id="a2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
    </div>


    <div class="panel-body">We decided what the purpose or outcome of the processing was to be.<br><br>
       <div class="col-md-2">
   <label class="radio-inline2 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency1" value="YES" id="b" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline73 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency1" value="NO" id="b1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline74 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency1" value="NOT SURE" id="b2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
    </div>



      <div class="panel-body"> We decided what personal data should be collected.<br><br>
 <div class="col-md-2">
   <label class="radio-inline3 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency2" value="YES" id="c" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline75 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency2" value="NO"id="c1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline76 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency2" value="NOT SURE" id="c2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

    <div class="panel-body">We decided which individuals to collect personal data about.
    <br><br>
<div class="col-md-2">
   <label class="radio-inline4 form-control" style="background-color: gray;margin-left:-5px;color:white" >
      <input type="radio" name="frequency3" value="YES" id="d" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline77 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency3" value="NO" id="d1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline78 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency3" value="NOT SURE" id="d2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
     </div>

      <div class="panel-body">We obtain a commercial gain or other benefit from the processing, except for any payment for services from another controller.
      <br><br>
  <div class="col-md-2">
   <label class="radio-inline5 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency4" value="YES" id="e" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline51 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency4" value="NO" id="e1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline52 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency4" value="NOT SURE" id="e2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

    <div class="panel-body">We are processing the personal data as a result of a contract between us and the data subject.
    <br><br>
<div class="col-md-2">
   <label class="radio-inline6 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency5" value="YES" id="f" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline61 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency5" value="NO"id="f1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline62 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency5" value="NOT SURE" id="f2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body">The data subjects are our employees.<br><br>
 <div class="col-md-2">
   <label class="radio-inline7 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency6" value="YES" id="g" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline07 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency6" value="NO" id="g1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline79 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency6" value="NOT SURE"id="g2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

    <div class="panel-body">We make decisions about the individuals concerned as part of or as a result of the processing.<br><br>
 <div class="col-md-2">
   <label class="radio-inline8 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency7" value="YES" id="h" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline80 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency7" value="NO" id="h1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline81 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency7" value="NOT SURE" id="h2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body"> We exercise professional judgement in the processing of the personal data.<br><br>
    <div class="col-md-2">
   <label class="radio-inline9 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency8" value="YES" id="i" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline91 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency8" value="NO" id="i1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline92 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency8" value="NOT SURE" id="i2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
     </div>

    <div class="panel-body">We have a direct relationship with the data subjects.<br><br>
<div class="col-md-2">
   <label class="radio-inline10 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency9" value="YES" id="j" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline100 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency9" value="NO" id="j1"class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline101 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency9" value="NOT SURE"id="j2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body">We have complete autonomy as to how the personal data is processed.<br><br>
<div class="col-md-2">
   <label class="radio-inline11 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency10" value="YES" id="k" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline111 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency10" value="NO" id="k1"class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline112 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency10" value="NOT SURE" id="k2" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

    <div class="panel-body">We have appointed the processors to process the personal data on our behalf.<br><br>

  <div class="col-md-2">
   <label class="radio-inline12 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency11" value="YES"id="l" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline121 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency11" value="NO"  id="l1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline122 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency11" value="NOT SURE" id="l2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body">We have a common objective with others regarding the processing.<br><br>
<div class="col-md-2">
   <label class="radio-inline13 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency12" value="YES"  id ="m" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline131 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency12" value="NO" id ="m1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline132 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency12" value="NOT SURE" id ="m2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

    <div class="panel-body">We are processing the personal data for the same purpose as another controller.
<br><br>
<div class="col-md-2">
   <label class="radio-inline14 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency13" value="YES" id="n" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline141 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency13" value="NO" id="n1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline142 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency13" value="NOT SURE" id="n2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body">We are using the same set of personal data (eg one database) for this processing as another controller.<br><br>
<div class="col-md-2">
   <label class="radio-inline15 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency14" value="YES" id="o" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline151 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency14" value="NO" id="o1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline152 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency14" value="NOT SURE"id="o2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
     </div>

    <div class="panel-body">We have designed this process with another controller.<br><br>
    <div class="col-md-2">
   <label class="radio-inline16 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency15" value="YES" id="p" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline161 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency15" value="NO" id="p1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline162 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency15" value="NOT SURE" id="p2" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

      <div class="panel-body">We have common information management rules with another controller.<br><br>
  <div class="col-md-2">
   <label class="radio-inline17 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency16" value="YES" id="q" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline171 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency16" value="NO" id="q1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline172 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency16" value="NOT SURE" id="q2" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>


    <div class="panel-body">We are following instructions from someone else regarding the processing of personal data.<br><br>
<div class="col-md-2">
   <label class="radio-inline18 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency17" value="YES" id="r"class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline181 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency17" value="NO" id="r1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline182 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency17" value="NOT SURE" id="r2"class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

     <div class="panel-body">We were given the personal data by a customer or similar third party, or told what data to collect.<br><br>
<div class="col-md-2">
   <label class="radio-inline19 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency18" value="YES" id="s"class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline191 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency18" value="NO" id="s1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline192 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency18" value="NOT SURE"id="s2" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

    <div class="panel-body">We do not decide to collect personal data from individuals.<br><br>
<div class="col-md-2">
   <label class="radio-inline20 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency19" value="YES" id="t" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline201 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency19" value="NO" id="t1"class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline202 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency19" value="NOT SURE"id="t2"class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body">We do not decide what personal data should be collected from individuals.<br><br>
 <div class="col-md-2">
   <label class="radio-inline21 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency20" value="YES" id="u" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline211 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency20" value="NO" id="u1"class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline212 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency20" value="NOT SURE"id="u2" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

    <div class="panel-body"> We do not decide the lawful basis for the use of that data.<br><br>
  <div class="col-md-2">
   <label class="radio-inline22 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency21" value="YES" id="v"class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline221 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency21" value="NO"id="v1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline222 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency21" value="NOT SURE"id="v2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

      <div class="panel-body"> We do not decide what purpose or purposes the data will be used for.<br><br>
<div class="col-md-2">
   <label class="radio-inline23 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency22" value="YES" id="w" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline231 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency22" value="NO" id="w1"class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline232 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency22" value="NOT SURE"id="w2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

    <div class="panel-body">We do not decide whether to disclose the data, or to whom.<br><br>
     <div class="col-md-2">
   <label class="radio-inline24 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency23" value="YES" id="x" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline241 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency23" value="NO" id="x1"class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline242 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency23" value="NOT SURE"id="x2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>

     <div class="panel-body">We do not decide how long to retain the data.<br><br>
     <div class="col-md-2">
   <label class="radio-inline25 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency24" value="YES" id="y" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline251 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency24" value="NO" id="y1"class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline252 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency24" value="NOT SURE"id="y2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
</div>


     <div class="panel-body"> We may make some decisions on how data is processed, but implement these decisions under a contract with someone else.<br><br>

 <div class="col-md-2">
   <label class="radio-inline26 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency25" value="YES" id="z"class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline261 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency25" value="NO" id="z1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline262 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency25" value="NOT SURE" id="z2"class="deselectRadioButton">NOT SURE
    </label>
  </div></div>

    <div class="panel-body">We are not interested in the end result of the processing.<br><br>
  <div class="col-md-2">
   <label class="radio-inline27 form-control" style="background-color: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency26" value="YES" id="a7" class="deselectRadioButton"> YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline271 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency26" value="NO"id="a8" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline272 form-control" style="background-color:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency26" value="NOT SURE" id="a9" class="deselectRadioButton">NOT SURE
    </label>
  </div></div>
     
  </div>
</div>

</div>
</div>
</div>

<button type="button" class="btn btn-success" style="margin-left: 270px;" onclick="sum()">Submit</button>
</div>
<div></div>
</body>
</html>
<!-- <script type="text/javascript" src="sum1.js"> -->
  
<!-- </script> -->
<script>
  $(document).ready(function()
  {
     $("#a").click(function(){
      $(".radio-inline1").css('background-color','#212030');
      $(".radio-inline71").css('background-color','gray');
       $(".radio-inline72").css('background-color','gray');


     });

 $("#a1").click(function(){
      $(".radio-inline1").css('background-color','gray');
      $(".radio-inline71").css('background-color','#212030');
       $(".radio-inline72").css('background-color','gray');


     });

 $("#a2").click(function(){
      $(".radio-inline1").css('background-color','gray');
      $(".radio-inline71").css('background-color','gray');
       $(".radio-inline72").css('background-color','#212030');


     });

     $("#b").click(function(){
        $(".radio-inline2").css('background-color','#212030');
        $(".radio-inline73").css('background-color','gray');
        $(".radio-inline74").css('background-color','gray');


     });
  $("#b1").click(function(){
        $(".radio-inline2").css('background-color','gray');
        $(".radio-inline73").css('background-color','#212030');
        $(".radio-inline74").css('background-color','gray');


     });

  $("#b2").click(function(){
        $(".radio-inline2").css('background-color','gray');
        $(".radio-inline73").css('background-color','gray');
        $(".radio-inline74").css('background-color','#212030');


     });

     $("#c").click(function(){
      $(".radio-inline3").css('background-color','#212030');
      $(".radio-inline75").css('background-color','gray');
      $(".radio-inline76").css('background-color','gray');

     });
      $("#c1").click(function(){
      $(".radio-inline3").css('background-color','gray');
      $(".radio-inline75").css('background-color','#212030');
      $(".radio-inline76").css('background-color','gray');

     });
       $("#c2").click(function(){
      $(".radio-inline3").css('background-color','gray');
      $(".radio-inline75").css('background-color','gray');
      $(".radio-inline76").css('background-color','#212030');

     });

       $("#d").click(function(){
      $(".radio-inline4").css('background-color','#212030');
      $(".radio-inline77").css('background-color','gray');
     $(".radio-inline78").css('background-color','gray');
     });

   $("#d1").click(function(){
      $(".radio-inline4").css('background-color','gray');
      $(".radio-inline77").css('background-color','#212030');
     $(".radio-inline78").css('background-color','gray');
   });
   $("#d2").click(function(){
      $(".radio-inline4").css('background-color','gray');
      $(".radio-inline77").css('background-color','gray');
     $(".radio-inline78").css('background-color','#212030');

});
     $("#e").click(function(){
      $(".radio-inline5").css('background-color','#212030');
       $(".radio-inline51").css('background-color','gray');
        $(".radio-inline52").css('background-color','gray');
     });
     $("#e1").click(function(){
      $(".radio-inline5").css('background-color','gray');
       $(".radio-inline51").css('background-color','#212030');
        $(".radio-inline52").css('background-color','gray');
     });
     $("#e2").click(function(){
      $(".radio-inline5").css('background-color','gray');
       $(".radio-inline51").css('background-color','gray');
        $(".radio-inline52").css('background-color','#212030');
     });



     $("#f").click(function(){
      $(".radio-inline6").css('background-color','#212030');
       $(".radio-inline61").css('background-color','gray');
 $(".radio-inline62").css('background-color','gray');
      });


     $("#f1").click(function(){
      $(".radio-inline6").css('background-color','gray');
       $(".radio-inline61").css('background-color','#212030');
 $(".radio-inline62").css('background-color','gray');
});
     $("#f2").click(function(){
      $(".radio-inline6").css('background-color','gray');
       $(".radio-inline61").css('background-color','gray');
 $(".radio-inline62").css('background-color','#212030');

});

      $("#g").click(function(){
      $(".radio-inline7").css('background-color','#212030');
        $(".radio-inline07").css('background-color','gray');
          $(".radio-inline79").css('background-color','gray');

     });
      $("#g1").click(function(){
      $(".radio-inline7").css('background-color','gray');
        $(".radio-inline07").css('background-color','#212030');
          $(".radio-inline79").css('background-color','gray');

     });
      $("#g2").click(function(){
      $(".radio-inline7").css('background-color','greay');
        $(".radio-inline07").css('background-color','gray');
          $(".radio-inline79").css('background-color','#212030');

     });



     $("#h").click(function(){
      $(".radio-inline8").css('background-color','#212030');
      $(".radio-inline80").css('background-color','gray');
     $(".radio-inline81").css('background-color','gray');

     });

 $("#h1").click(function(){
      $(".radio-inline8").css('background-color','gray');
      $(".radio-inline80").css('background-color','#212030');
     $(".radio-inline81").css('background-color','gray');
     });
  $("#h2").click(function(){
      $(".radio-inline8").css('background-color','gray');
      $(".radio-inline80").css('background-color','gray');
     $(".radio-inline81").css('background-color','#212030');
     });


     $("#i").click(function(){
      $(".radio-inline9").css('background-color','#212030');
       $(".radio-inline91").css('background-color','gray');
          $(".radio-inline92").css('background-color','gray');

 
     });
      $("#i1").click(function(){
      $(".radio-inline9").css('background-color','gray');
       $(".radio-inline91").css('background-color','#212030');
          $(".radio-inline92").css('background-color','gray');
     });
       $("#i2").click(function(){
      $(".radio-inline9").css('background-color','gray');
       $(".radio-inline91").css('background-color','gray');
          $(".radio-inline92").css('background-color','#212030');
     });

       $("#j").click(function(){
      $(".radio-inline10").css('background-color','#212030');
        $(".radio-inline100").css('background-color','gray');
          $(".radio-inline101").css('background-color','gray');

     });
        $("#j1").click(function(){
      $(".radio-inline10").css('background-color','gray');
      $(".radio-inline100").css('background-color','#212030');
          $(".radio-inline101").css('background-color','gray');

     });

 $("#j2").click(function(){
      $(".radio-inline10").css('background-color','gray');
      $(".radio-inline100").css('background-color','gray');
          $(".radio-inline101").css('background-color','#212030');

     });


     $("#k").click(function(){
      $(".radio-inline11").css('background-color','#212030');
      $(".radio-inline111").css('background-color','gray');
          $(".radio-inline112").css('background-color','gray');
     });
      $("#k1").click(function(){
      $(".radio-inline11").css('background-color','gray');
      $(".radio-inline111").css('background-color','#212030');
          $(".radio-inline112").css('background-color','gray');
     });
       $("#k2").click(function(){
      $(".radio-inline11").css('background-color','gray');
      $(".radio-inline111").css('background-color','gray');
          $(".radio-inline112").css('background-color','#212030');
     });



     $("#l").click(function(){
      $(".radio-inline12").css('background-color','#212030');
       $(".radio-inline121").css('background-color','gray');
          $(".radio-inline122").css('background-color','gray');
     });
     $("#l1").click(function(){
      $(".radio-inline12").css('background-color','gray');
       $(".radio-inline121").css('background-color','#212030');
          $(".radio-inline122").css('background-color','gray');
     });
     $("#l2").click(function(){
      $(".radio-inline12").css('background-color','gray');
       $(".radio-inline121").css('background-color','gray');
          $(".radio-inline122").css('background-color','#212030');
     });



      $("#m").click(function(){
      $(".radio-inline13").css('background-color','#212030');
        $(".radio-inline131").css('background-color','gray');
          $(".radio-inline132").css('background-color','gray');
     });
        $("#m1").click(function(){
      $(".radio-inline13").css('background-color','gray');
        $(".radio-inline131").css('background-color','#212030');
          $(".radio-inline132").css('background-color','gray');
     });
          $("#m2").click(function(){
      $(".radio-inline13").css('background-color','gray');
        $(".radio-inline131").css('background-color','gray');
         $(".radio-inline132").css('background-color','#212030');
     });




     $("#n").click(function(){
      $(".radio-inline14").css('background-color','#212030');
         $(".radio-inline141").css('background-color','gray');
        $(".radio-inline142").css('background-color','gray');
     });

     $("#n1").click(function(){
      $(".radio-inline14").css('background-color','gray');
         $(".radio-inline141").css('background-color','#212030');
        $(".radio-inline142").css('background-color','gray');
     });

     $("#n2").click(function(){
      $(".radio-inline14").css('background-color','gray');
         $(".radio-inline141").css('background-color','gray');
        $(".radio-inline142").css('background-color','#212030');
     });

     $("#o").click(function(){
      $(".radio-inline15").css('background-color','#212030');
       $(".radio-inline151").css('background-color','gray');
         $(".radio-inline152").css('background-color','gray');

     });
       $("#o1").click(function(){
      $(".radio-inline15").css('background-color','gray');
       $(".radio-inline151").css('background-color','#212030');
         $(".radio-inline152").css('background-color','gray');

     });
         $("#o2").click(function(){
      $(".radio-inline15").css('background-color','gray');
       $(".radio-inline151").css('background-color','gray');
         $(".radio-inline152").css('background-color','#212030');

     });



       $("#p").click(function(){
      $(".radio-inline16").css('background-color','#212030');
       $(".radio-inline161").css('background-color','gray');
       $(".radio-inline162").css('background-color','gray');

     });

       $("#p1").click(function(){
      $(".radio-inline16").css('background-color','gray');
       $(".radio-inline161").css('background-color','#212030');
       $(".radio-inline162").css('background-color','gray');

     });

       $("#p2").click(function(){
      $(".radio-inline16").css('background-color','gray');
       $(".radio-inline161").css('background-color','gray');
       $(".radio-inline162").css('background-color','#212030');

     });


     $("#q").click(function(){
      $(".radio-inline17").css('background-color','#212030');
      $(".radio-inline171").css('background-color','gray');
       $(".radio-inline172").css('background-color','gray');

     });
      $("#q1").click(function(){
      $(".radio-inline17").css('background-color','gray');
      $(".radio-inline171").css('background-color','#212030');
       $(".radio-inline172").css('background-color','gray');

     });
       $("#q2").click(function(){
      $(".radio-inline17").css('background-color','gray');
      $(".radio-inline171").css('background-color','gray');
       $(".radio-inline172").css('background-color','#212030');

     });


     $("#r").click(function(){
      $(".radio-inline18").css('background-color','#212030');
      $(".radio-inline181").css('background-color','gray');
      $(".radio-inline182").css('background-color','gray');

     });
     $("#r1").click(function(){
      $(".radio-inline18").css('background-color','gray');
      $(".radio-inline181").css('background-color','#212030');
      $(".radio-inline182").css('background-color','gray');

     });

$("#r2").click(function(){
      $(".radio-inline18").css('background-color','gray');
      $(".radio-inline181").css('background-color','gray');
      $(".radio-inline182").css('background-color','#212030');

     });




     $("#s").click(function(){
      $(".radio-inline19").css('background-color','#212030');
         $(".radio-inline191").css('background-color','gray');
      $(".radio-inline192").css('background-color','gray');

     });
      $("#s1").click(function(){
      $(".radio-inline19").css('background-color','gray');
         $(".radio-inline191").css('background-color','#212030');
      $(".radio-inline192").css('background-color','gray');

     });
       $("#s2").click(function(){
         $(".radio-inline19").css('background-color','gray');
         $(".radio-inline191").css('background-color','gray');
      $(".radio-inline192").css('background-color','#212030');

     });


     $("#t").click(function(){
      $(".radio-inline20").css('background-color','#212030');
         $(".radio-inline201").css('background-color','gray');
         $(".radio-inline202").css('background-color','gray');

     });
       $("#t1").click(function(){
      $(".radio-inline20").css('background-color','gray');
         $(".radio-inline201").css('background-color','#212030');
         $(".radio-inline202").css('background-color','gray');

     });
         $("#t2").click(function(){
         $(".radio-inline20").css('background-color','gray');
         $(".radio-inline201").css('background-color','gray');
         $(".radio-inline202").css('background-color','#212030');

     });

      $("#u").click(function(){
      $(".radio-inline21").css('background-color','#212030');
       $(".radio-inline211").css('background-color','gray');
         $(".radio-inline212").css('background-color','gray');
     });
  $("#u1").click(function(){
      $(".radio-inline21").css('background-color','gray');
       $(".radio-inline211").css('background-color','#212030');
         $(".radio-inline212").css('background-color','gray');
     });
    $("#u2").click(function(){
      $(".radio-inline21").css('background-color','gray');
       $(".radio-inline211").css('background-color','gray');
         $(".radio-inline212").css('background-color','#212030');
     });



     $("#v").click(function(){
      $(".radio-inline22").css('background-color','#212030');
      $(".radio-inline221").css('background-color','gray');
       $(".radio-inline222").css('background-color','gray');
     });
      $("#v1").click(function(){
      $(".radio-inline22").css('background-color','gray');
      $(".radio-inline221").css('background-color','#212030');
       $(".radio-inline222").css('background-color','gray');
     });
       $("#v2").click(function(){
      $(".radio-inline22").css('background-color','gray');
      $(".radio-inline221").css('background-color','gray');
       $(".radio-inline222").css('background-color','#212030');
     });



     $("#w").click(function(){
      $(".radio-inline23").css('background-color','#212030');
        $(".radio-inline231").css('background-color','gray');
      $(".radio-inline232").css('background-color','gray');
     });
      $("#w1").click(function(){
      $(".radio-inline23").css('background-color','gray');
        $(".radio-inline231").css('background-color','#212030');
      $(".radio-inline232").css('background-color','gray');

     });

 $("#w2").click(function(){
      $(".radio-inline23").css('background-color','gray');
        $(".radio-inline231").css('background-color','gray');
      $(".radio-inline232").css('background-color','#212030');

     });


       $("#x").click(function(){
      $(".radio-inline24").css('background-color','#212030');
        $(".radio-inline241").css('background-color','gray');
        $(".radio-inline242").css('background-color','gray');

     });
        $("#x1").click(function(){
      $(".radio-inline24").css('background-color','gray');
        $(".radio-inline241").css('background-color','#212030');
        $(".radio-inline242").css('background-color','gray');

     });
         $("#x2").click(function(){
        $(".radio-inline24").css('background-color','gray');
        $(".radio-inline241").css('background-color','gray');
        $(".radio-inline242").css('background-color','#212030');

     });


     $("#y").click(function(){
      $(".radio-inline25").css('background-color','#212030');
       $(".radio-inline251").css('background-color','gray');
        $(".radio-inline252").css('background-color','gray');

     });
  $("#y1").click(function(){
      $(".radio-inline25").css('background-color','gray');
       $(".radio-inline251").css('background-color','#212030');
        $(".radio-inline252").css('background-color','gray');

     });
    $("#y2").click(function(){
      $(".radio-inline25").css('background-color','gray');
       $(".radio-inline251").css('background-color','gray');
        $(".radio-inline252").css('background-color','#212030');

     });


     $("#z").click(function(){
      $(".radio-inline26").css('background-color','#212030');
       $(".radio-inline261").css('background-color','gray');
        $(".radio-inline262").css('background-color','gray');

     });
       $("#z1").click(function(){
      $(".radio-inline26").css('background-color','gray');
       $(".radio-inline261").css('background-color','#212030');
        $(".radio-inline262").css('background-color','gray');

     });
         $("#z2").click(function(){
      $(".radio-inline26").css('background-color','gray');
       $(".radio-inline261").css('background-color','gray');
        $(".radio-inline262").css('background-color','#212030');

     });
        $("#a7").click(function(){
      $(".radio-inline27").css('background-color','#212030');
       $(".radio-inline271").css('background-color','gray');
        $(".radio-inline272").css('background-color','gray');

     });
         $("#a8").click(function(){
      $(".radio-inline27").css('background-color','gray');
       $(".radio-inline271").css('background-color','#212030');
        $(".radio-inline272").css('background-color','gray');

     });
          $("#a9").click(function(){
      $(".radio-inline27").css('background-color','gray');
       $(".radio-inline271").css('background-color','gray');
        $(".radio-inline272").css('background-color','#212030');

     });


  });
</script>
<script type="text/javascript">
  
function sum()
{
  
  var a1=document.getElementById("a");
  var b1=document.getElementById("b");
  var c1=document.getElementById("c");
  var d1=document.getElementById("d");
  var e1=document.getElementById("e");
  var f1=document.getElementById("f");
  var g1=document.getElementById("g");
  var h1=document.getElementById("h");
  var i1=document.getElementById("i");
  var j1=document.getElementById("j");
  var k1=document.getElementById("k");
  var l1=document.getElementById("l");
  var m1=document.getElementById("m");
  var n1=document.getElementById("n");
  var o1=document.getElementById("o");
  var p1=document.getElementById("p");
  var q1=document.getElementById("q");
  var r1=document.getElementById("r");
  var s1=document.getElementById("s");
  var t1=document.getElementById("t");
  var u1=document.getElementById("u");
  var v1=document.getElementById("v");
  var w1=document.getElementById("w");
  var x1=document.getElementById("x");
  var y1=document.getElementById("y");
  var z1=document.getElementById("z");
  var a4=document.getElementById("a7");
  var add=0;
  if(a1.checked==true)
  {
    add=add+1;
  }
  if(b1.checked==true)
  {
    add=add+1;
  }
  if(c1.checked==true)
  {
    add=add+1;
  }
  if(d1.checked==true)
  {
    add=add+1;
  }
  if(e1.checked==true)
  {
    add=add+1;
  }
  if(f1.checked==true)
  {
    add=add+1;
  }
  if(g1.checked==true)
  {
    add=add+1;
  }
  if(h1.checked==true)
  {
    add=add+1;
  }
  if(i1.checked==true)
  {
    add=add+1;
  }
  if(j1.checked==true)
  {
    add=add+1;
  }
  if(k1.checked==true)
  {
    add=add+1;
  }
  if(l1.checked==true)
  {
    add=add+1;
  }
  var per1=(add*100)/12;
var num=0;
  if(m1.checked==true)
  {
    num=num+1;
  }
  if(n1.checked==true)
  {
       num=num+1;
  }
  if(o1.checked==true)
  {
    num=num+1;
  }
  if(p1.checked==true)
  {
       num=num+1;
  }
  if(q1.checked==true)
  {
       num=num+1;
  }
 var per2=(num*100)/5;
  var mix=0;

  if(r1.checked==true)
  {
    mix=mix+1;
  }
  if(s1.checked==true)
  {
    mix=mix+1;
  }
  if(t1.checked==true)
  {
    mix=mix+1;
  }
  if(u1.checked==true)
  {
    mix=mix+1;
  }
  if(v1.checked==true)
  {
    mix=mix+1;
  }
  if(w1.checked==true)
  {
    mix=mix+1;
  }
  if(x1.checked==true)
  {
    mix=mix+1;
  }
  if(y1.checked==true)
  {
    mix=mix+1;
  }
  if(z1.checked==true)
  {
    mix=mix+1;
  }
  if(a4.checked==true)
  {
    mix=mix+1;
  }
  var per3=(mix*100)/10;



if((per1>70 && per3<50)  && (per2>50 && per2<70) ) 
{
  
    swal("Your are Controller");
}

else if((per1>50 && per1<70) && (per2>70 && per3<50))
{
    swal("You are a Joint Controller"); 
}
else if ((per1<50) && ((per2>50) && (per2<70)) && (per3<50))
{

 setTimeout(function () { 
swal({
  title: "Look like you are Joint Controller",
  confirmButtonText: "OK"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "demo_control.php";
  }
}); });


  //swal("Look like you are Joint Controller");
}
else if((per1>50 && per1<70) && per2<50 && per3<50)
{
  // swal("Look like you are a Controller");
  setTimeout(function () { 
swal({
  title: "Look like you are a Controller",
  confirmButtonText: "OK"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "demo_control.php";
  }
}); });
}
else if(per1>70 && (per2>50 && per3<70))
{
    // swal("You are a Processor"); 
//       swal({
//   title: "You are a Processor",
//   timer: 10000,
//   showConfirmButton: false
// }, function(){
//       window.location.href = "demo_control.php";
// });

setTimeout(function () { 
swal({
  title: "You are a Processor",
  confirmButtonText: "OK"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "demo_control.php";
  }
}); });


}
else if(((per1>75 && per3>75) || ((per1>75) && (per3>50 && per3<75)) || ((per1>50 && per1<75) && (per3>75))) ||  (per1>20 && per2>30))
{


//   swal({
//   title: "You cannot be a Controller and Processor for the same Processing Activity and same purpose .However you can be a Controller and Processor for the same processing Action with different Purpose",
//   timer: 10000,
//   showConfirmButton: false
// }, function(){
//       window.location.href = "demo_control.php";
// });
setTimeout(function () { 
swal({
  title: "You cannot be a Controller and Processor for the same Processing Activity and same purpose .However you can be a Controller and Processor for the same processing Action with different Purpose",
  confirmButtonText: "OK"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "demo_control.php";
  }
}); });
 
}

// else if(per1>10 && per2>10)
// {

// setTimeout(function () { 
// swal({
//   title: "You cannot be a Controller and Processor for the same Processing Activity and same purpose .However you can be a Controller and Processor for the same processing Action with different Purpose",
//   confirmButtonText: "OK"
// },
// function(isConfirm){
//   if (isConfirm) {
//     window.location.href = "demo_control.php";
//   }
// }); 
// });
 
// }





else
{
  
//   swal({
//   title: "Please Respond to all the questions!",
//   timer: 3000,
//   showConfirmButton: false
// }, function(){
//       window.location.href = "demo_control.php";
// });

setTimeout(function () { 
swal({
  title: "Please Respond to all the questions!",
  confirmButtonText: "OK"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "demo_control.php";
  }
}); });


}



}

</script>

