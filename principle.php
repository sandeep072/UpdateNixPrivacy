<?php 
include "prinresult.php";
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
     <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0"> 

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <!-- <a href="principle_sum.html"></a> -->
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <a href="dashboard.php"><img src="nix.png" alt="nix" style="width: 45px;height: 45px;"></a>

  <a class="navbar-brand" href="#" style="color: white">Principles alignment </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>


<div class="container-fluid">
  <div class="row">

             <div class="vertical-menu">
                 <div class="dropdown">
                   <button class="btn btn-md" type="button" data-toggle="dropdown">Self Assessment
                      <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="demo_control.php">Controller Processor</a></li>
                            <li><a href="#">Principles Alignment</a></li>
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
      <li><a href="External.php">Type of data</a></li>
      <li><a href="#">Mapping</a></li>
    </ul>
</div> 
              </div>

  <div class="container bg-light ">
  <div class="row">
              <div class="col-md-12">
                <div class="container-fluid">
                 Quick GDPR 
                    <div id="demo-accordion-collapse" role="tablist">
                      <div class="card">
                       <div class="card-header" role="tab" id="accord1">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-pane-1" role="button" aria-expanded="false" aria-controls="collapse-pane-1">
          Lawfulness
                      </a>
                       </div>
    <div id="collapse-pane-1" class="collapse show" role="tabpanel" aria-labelledby="accord1" data-parent="#demo-accordion-collapse">
      <div class="card-body">
      <div class="panel-body mb-6">
          1.1 We have identified an appropriate lawful basis (or bases) for our processing. <br><br>
<div class="col-md-2">
   <label class="radio-inline1 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency" value="YES" id="a" class="deselectRadioButton" >YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline2 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency" value="NO" id="a1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline3 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency" value="NOT SURE" id="a2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
         
     </div>
<div class="panel-body mb-6">
  1.2 If we are processing special category data or criminal offence data, we have identified a condition for processing this type of data.<br><br>
     <div class="col-md-2">
   <label class="radio-inline4 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency1" value="YES" id="b" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline5 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency1" value="NO" id="b1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline6 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency1" value="NOT SURE" id="b2" class="deselectRadioButton">NOT SURE
    </label>
  </div> 
</div>
<div class="panel-body mb-6">
  1.3 We don't do anything generally unlawful with personal data.

<br><br>
     <div class="col-md-2">
   <label class="radio-inline7 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency2" value="YES" id="c" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline8 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency2" value="NO" id="c1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline9 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency2" value="NOT SURE" id="c2" class="deselectRadioButton">NOT SURE
    </label>
  </div> 

</div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" role="tab1" id="accord2">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-2" role="button" aria-expanded="false" aria-controls="collapse-pane-2">
        Fairness
        </a>
      </h5>
    </div>
   <div id="collapse-pane-2" class="collapse" role="tabpanel" aria-labelledby="accord2" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="panel-body mb-6">
               2.1 We have considered how the processing may affect the individuals concerned and can justify any adverse impact.<br><br>
     <div class="col-md-2">
   <label class="radio-inline10 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency3" value="YES" id="d" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline11 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency3" value="NO" id="d1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline12 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency3" value="NOT SURE" id="d2" class="deselectRadioButton">NOT SURE
    </label>
  </div> 
             </div>
           <div class="panel-body mb-6">
              2.2 We only handle people’s data in ways they would reasonably expect, or we can explain why any unexpected processing is justified.

<br><br>
     <div class="col-md-2">
   <label class="radio-inline13 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency4" value="YES" id="e" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline14 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency4" value="NO"  id="e1"class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline15 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency4" value="NOT SURE" id="e2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
           </div>
         <div class="panel-body mb-6">
            2.3 We do not deceive or mislead people when we collect their personal data.

 <br><br>
      <div class="col-md-2">
   <label class="radio-inline16 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency5" value="YES" id="f" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline17 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency5" value="NO"  id="f1"class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline18 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency5" value="NOT SURE" id="f2"class="deselectRadioButton">NOT SURE
    </label>
  </div>

         </div>
      </div>
  </div>
  </div>


  <div class="card">
    <div class="card-header" role="tab2" id="accord3">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-3" role="button" aria-expanded="false" aria-controls="collapse-pane-3">
         Transparency
        </a>
      </h5>
    </div>
  <div id="collapse-pane-3" class="collapse" role="tabpanel" aria-labelledby="accord3" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="panel-body mb-6">
                 3.1 We are open and honest, and comply with the transparency obligations of the right to be informed. <br><br>
     <div class="col-md-2">
   <label class="radio-inline19 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency6" value="YES" id="g" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline20 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency6" value="NO" id="g1"class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline21 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency6" id="g2" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
               </div>
   
   </div>
    </div>
  </div>
   <div class="card">
    <div class="card-header" role="tab2" id="accord3">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-4" role="button" aria-expanded="false" aria-controls="collapse-pane-4">
          Purpose Limitation
        </a>
      </h5>
    </div>
  <div id="collapse-pane-4" class="collapse" role="tabpanel" aria-labelledby="accord4" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="panel-body mb-6">
                 4.1 We have clearly identified our purpose or purposes for processing. <br><br>
     <div class="col-md-2">
   <label class="radio-inline22 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency7" value="YES" id="h" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline23 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency7" value="NO" id="h1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline24 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency7" value="NOT SURE"  id="h2"class="deselectRadioButton">NOT SURE
    </label>
  </div>
               </div>
              <div class="panel-body mb-6">
               4.2 We have documented those purposes.

<br><br>
     <div class="col-md-2">
   <label class="radio-inline25 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency8" value="YES" id="i" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline26 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency8" value="NO" id="i1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline27 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency8" value="NOT SURE" id="i2" class="deselectRadioButton">NOT SURE
    </label>
  </div> 
              </div>
             <div class="panel-body mb-6">
             4.3 We include details of our purposes in our privacy information for individuals.<br><br>
     <div class="col-md-2">
   <label class="radio-inline28 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency9" value="YES" id="j" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline29 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency9" value="NO" id="j1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline30 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency9" value="NOT SURE" id="j2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
           </div> 
           <div class="panel-body mb-6">
             4.4 We regularly review our processing and, where necessary, update our documentation and our privacy information for individuals.<br><br>
     <div class="col-md-2">
   <label class="radio-inline31 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency10" value="YES" id="k" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline32 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency10" value="NO" id="k1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline33 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency10" value="NOT SURE" id="k2" class="deselectRadioButton">NOT SURE
    </label>
  </div> 
           </div> 
           <div class="panel-body mb-6">
             4.5 If we plan to use personal data for a new purpose other than a legal obligation or function set out in law, we check that this is compatible with our original purpose or we get specific consent for the new purpose.<br><br>
     <div class="col-md-2">
   <label class="radio-inline34 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency11" value="YES" id="l" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline35 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency11" value="NO"id="l1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline36 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency11" value="NOT SURE" id="l2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
           </div>   
   </div>
    </div>
  </div>
   <div class="card">
    <div class="card-header" role="tab2" id="accord3">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-5" role="button" aria-expanded="false" aria-controls="collapse-pane-5">
      Data Minimisation
        </a>
      </h5>
    </div>
  <div id="collapse-pane-5" class="collapse" role="tabpanel" aria-labelledby="accord5" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="panel-body mb-6">
                 5.1 We only collect personal data we actually need for our specified purposes.

<br><br>
     <div class="col-md-2">
   <label class="radio-inline37 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency12" value="YES" id="m" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline38 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency12" value="NO" id="m1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline39 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency12" value="NOT SURE" id="m2" class="deselectRadioButton">NOT SURE
    </label>
  </div> 
               </div>
              <div class="panel-body mb-6">
               5.2  We have sufficient personal data to properly fulfil those purposes. <br><br>
     <div class="col-md-2">
   <label class="radio-inline40 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency13" value="YES" id="n" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline41 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency13" value="NO" id="n1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline42 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency13" value="NOT SURE" id="n2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
              </div>
             <div class="panel-body mb-6">
             5.3  We periodically review the data we hold, and delete anything we don’t need.  <br><br>
     <div class="col-md-2">
   <label class="radio-inline43 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency14" value="YES" id="o" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline44 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency14" value="NO"id="o1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline45 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency14" id="o2" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div> 5
           </div>   
   </div>
    </div>
  </div>
     <div class="card">
    <div class="card-header" role="tab2" id="accord3">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-6" role="button" aria-expanded="false" aria-controls="collapse-pane-5">
      Accuracy
        </a>
      </h5>
    </div>
  <div id="collapse-pane-6" class="collapse" role="tabpanel" aria-labelledby="accord6" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="panel-body mb-6">
                 6.1 We ensure the accuracy of any personal data we create.<br><br>
     <div class="col-md-2">
   <label class="radio-inline46 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency15" value="YES" id="p" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline47 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency15" value="NO" id="p1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline48 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency15"id="p2" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div>
               </div>
              <div class="panel-body mb-6">
               6.2 We have appropriate processes in place to check the accuracy of the data we collect, and we record the source of that data.<br><br>
     <div class="col-md-2">
   <label class="radio-inline49 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency16" value="YES" id="q" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline50 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency16"id="q1" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline51 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency16" id="q2" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div> 
              </div>
             <div class="panel-body mb-6">
             6.3  We have a process in place to identify when we need to keep the data updated to properly fulfil our purpose, and we update it as necessary.<br><br>
     <div class="col-md-2">
   <label class="radio-inline52 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency17" value="YES" id="r" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline53 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency17" id="r1" value="NO" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline54 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency17"id="r2" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div> 
           </div>   
            <div class="panel-body mb-6">
               6.4 If we need to keep a record of a mistake, we clearly identify it as a mistake. <br><br>
     <div class="col-md-2">
   <label class="radio-inline55 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency18" value="YES" id="s" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline56 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency18" value="NO" id="s1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline57 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency18" value="NOT SURE" id="s2" class="deselectRadioButton">NOT SURE
    </label>
  </div>
              </div>
             <div class="panel-body mb-6">
             6.5 Our records clearly identify any matters of opinion, and where appropriate whose opinion it is and any relevant changes to the underlying facts.

<br><br>
     <div class="col-md-2">
   <label class="radio-inline58 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency19" value="YES" id="t" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline59 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency19" value="NO" id="t1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline60 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency19" value="NOT SURE" id="t2" class="deselectRadioButton">NOT SURE
    </label>
  </div> 
           </div>   
            <div class="panel-body mb-6">
               6.6 We comply with the individual’s right to rectification and carefully consider any challenges to the accuracy of the personal data. <br><br>
     <div class="col-md-2">
   <label class="radio-inline61 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency20" value="YES" id="u" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline62 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency20" value="NO" id="u1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline63 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency20" id="u2" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div> 
              </div>
             <div class="panel-body mb-6">
             6.7 As a matter of good practice, we keep a note of any challenges to the accuracy of the personal data.<br><br>
     <div class="col-md-2">
   <label class="radio-inline64 form-control" style="background:gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency21" value="YES" id="v" class="deselectRadioButton">YES
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline65 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency21" value="NO" id="v1" class="deselectRadioButton" >NO
    </label>
  </div>
  <div class="col-md-2">
    <label class="radio-inline66 form-control" style="background: gray;margin-left:-5px;color: white" >
      <input type="radio" name="frequency21" id="v2" value="NOT SURE" class="deselectRadioButton">NOT SURE
    </label>
  </div> 
           </div>   
   </div>
    </div>
  </div>

</div>
<button type="button" class=" btn btn-success" style="margin-top: 20px;" onclick="sum()">Submit</button>
</div>
</div>
</div>
</div>
</div>

</div>
</body>
</html>
<!-- <script type="text/javascript" src="psum.js"></script> -->
<script type="text/javascript">
  
$(document).ready(function(){

 $("#a").click(function(){
   $('.radio-inline1').css('background','black');
   $('.radio-inline2').css('background','gray');
   $('.radio-inline3').css('background','gray');
 });
  $("#a1").click(function(){
   $('.radio-inline1').css('background','gray');
   $('.radio-inline2').css('background','black');
   $('.radio-inline3').css('background','gray');
 });
   $("#a2").click(function(){
   $('.radio-inline1').css('background','gray');
   $('.radio-inline2').css('background','gray');
   $('.radio-inline3').css('background','black');
 });


    $("#b").click(function(){
   $('.radio-inline4').css('background','black');
   $('.radio-inline5').css('background','gray');
   $('.radio-inline6').css('background','gray');
 });
  $("#b1").click(function(){
   $('.radio-inline4').css('background','gray');
   $('.radio-inline5').css('background','black');
   $('.radio-inline6').css('background','gray');
 });
   $("#b2").click(function(){
   $('.radio-inline4').css('background','gray');
   $('.radio-inline5').css('background','gray');
   $('.radio-inline6').css('background','black');
 });


    $("#c").click(function(){
   $('.radio-inline7').css('background','black');
   $('.radio-inline8').css('background','gray');
   $('.radio-inline9').css('background','gray');
 });
  $("#c1").click(function(){
   $('.radio-inline7').css('background','gray');
   $('.radio-inline8').css('background','black');
   $('.radio-inline9').css('background','gray');
 });
   $("#c2").click(function(){
   $('.radio-inline7').css('background','gray');
   $('.radio-inline8').css('background','gray');
   $('.radio-inline9').css('background','black');
 });


    $("#d").click(function(){
   $('.radio-inline10').css('background','black');
   $('.radio-inline11').css('background','gray');
   $('.radio-inline12').css('background','gray');
 });
  $("#d1").click(function(){
   $('.radio-inline10').css('background','gray');
   $('.radio-inline11').css('background','black');
   $('.radio-inline12').css('background','gray');
 });
   $("#d2").click(function(){
   $('.radio-inline10').css('background','gray');
   $('.radio-inline11').css('background','gray');
   $('.radio-inline12').css('background','black');
 });



    $("#e").click(function(){
   $('.radio-inline13').css('background','black');
   $('.radio-inline14').css('background','gray');
   $('.radio-inline15').css('background','gray');
 });
  $("#e1").click(function(){
   $('.radio-inline13').css('background','gray');
   $('.radio-inline14').css('background','black');
   $('.radio-inline15').css('background','gray');
 });
   $("#e2").click(function(){
   $('.radio-inline13').css('background','gray');
   $('.radio-inline14').css('background','gray');
   $('.radio-inline15').css('background','black');
 });


    $("#f").click(function(){
   $('.radio-inline16').css('background','black');
   $('.radio-inline17').css('background','gray');
   $('.radio-inline18').css('background','gray');
 });
  $("#f1").click(function(){
   $('.radio-inline16').css('background','gray');
   $('.radio-inline17').css('background','black');
   $('.radio-inline18').css('background','gray');
 });
   $("#f2").click(function(){
   $('.radio-inline16').css('background','gray');
   $('.radio-inline17').css('background','gray');
   $('.radio-inline18').css('background','black');
 });




    $("#g").click(function(){
   $('.radio-inline19').css('background','black');
   $('.radio-inline20').css('background','gray');
   $('.radio-inline21').css('background','gray');
 });
  $("#g1").click(function(){
   $('.radio-inline19').css('background','gray');
   $('.radio-inline20').css('background','black');
   $('.radio-inline21').css('background','gray');
 });
   $("#g2").click(function(){
   $('.radio-inline19').css('background','gray');
   $('.radio-inline20').css('background','gray');
   $('.radio-inline21').css('background','black');
 });


    $("#h").click(function(){
   $('.radio-inline22').css('background','black');
   $('.radio-inline23').css('background','gray');
   $('.radio-inline24').css('background','gray');
 });
  $("#h1").click(function(){
   $('.radio-inline22').css('background','gray');
   $('.radio-inline23').css('background','black');
   $('.radio-inline24').css('background','gray');
 });
   $("#h2").click(function(){
   $('.radio-inline22').css('background','gray');
   $('.radio-inline23').css('background','gray');
   $('.radio-inline24').css('background','black');
 });


    $("#i").click(function(){
   $('.radio-inline25').css('background','black');
   $('.radio-inline26').css('background','gray');
   $('.radio-inline27').css('background','gray');
 });
  $("#i1").click(function(){
   $('.radio-inline25').css('background','gray');
   $('.radio-inline26').css('background','black');
   $('.radio-inline27').css('background','gray');
 });
   $("#i2").click(function(){
   $('.radio-inline25').css('background','gray');
   $('.radio-inline26').css('background','gray');
   $('.radio-inline27').css('background','black');
 });


       $("#j").click(function(){
   $('.radio-inline28').css('background','black');
   $('.radio-inline29').css('background','gray');
   $('.radio-inline30').css('background','gray');
 });
  $("#j1").click(function(){
   $('.radio-inline28').css('background','gray');
   $('.radio-inline29').css('background','black');
   $('.radio-inline30').css('background','gray');
 });
   $("#j2").click(function(){
   $('.radio-inline28').css('background','gray');
   $('.radio-inline29').css('background','gray');
   $('.radio-inline30').css('background','black');
 });


       $("#k").click(function(){
   $('.radio-inline31').css('background','black');
   $('.radio-inline32').css('background','gray');
   $('.radio-inline33').css('background','gray');
 });
  $("#k1").click(function(){
   $('.radio-inline31').css('background','gray');
   $('.radio-inline32').css('background','black');
   $('.radio-inline33').css('background','gray');
 });
   $("#k2").click(function(){
   $('.radio-inline31').css('background','gray');
   $('.radio-inline32').css('background','gray');
   $('.radio-inline33').css('background','black');
 });


       $("#l").click(function(){
   $('.radio-inline34').css('background','black');
   $('.radio-inline35').css('background','gray');
   $('.radio-inline36').css('background','gray');
 });
  $("#l1").click(function(){
   $('.radio-inline34').css('background','gray');
   $('.radio-inline35').css('background','black');
   $('.radio-inline36').css('background','gray');
 });
   $("#l2").click(function(){
   $('.radio-inline34').css('background','gray');
   $('.radio-inline35').css('background','gray');
   $('.radio-inline36').css('background','black');
 });

       $("#m").click(function(){
   $('.radio-inline37').css('background','black');
   $('.radio-inline38').css('background','gray');
   $('.radio-inline39').css('background','gray');
 });
  $("#m1").click(function(){
   $('.radio-inline37').css('background','gray');
   $('.radio-inline38').css('background','black');
   $('.radio-inline39').css('background','gray');
 });
   $("#m2").click(function(){
   $('.radio-inline37').css('background','gray');
   $('.radio-inline38').css('background','gray');
   $('.radio-inline39').css('background','black');
 });


       $("#n").click(function(){
   $('.radio-inline40').css('background','black');
   $('.radio-inline41').css('background','gray');
   $('.radio-inline42').css('background','gray');
 });
  $("#n1").click(function(){
   $('.radio-inline40').css('background','gray');
   $('.radio-inline41').css('background','black');
   $('.radio-inline42').css('background','gray');
 });
   $("#n2").click(function(){
   $('.radio-inline40').css('background','gray');
   $('.radio-inline41').css('background','gray');
   $('.radio-inline42').css('background','black');
 });


       $("#o").click(function(){
   $('.radio-inline43').css('background','black');
   $('.radio-inline44').css('background','gray');
   $('.radio-inline45').css('background','gray');
 });
  $("#o1").click(function(){
   $('.radio-inline43').css('background','gray');
   $('.radio-inline44').css('background','black');
   $('.radio-inline45').css('background','gray');
 });
   $("#o2").click(function(){
   $('.radio-inline43').css('background','gray');
   $('.radio-inline44').css('background','gray');
   $('.radio-inline45').css('background','black');
 });


       $("#p").click(function(){
   $('.radio-inline46').css('background','black');
   $('.radio-inline47').css('background','gray');
   $('.radio-inline48').css('background','gray');
 });
  $("#p1").click(function(){
   $('.radio-inline46').css('background','gray');
   $('.radio-inline47').css('background','black');
   $('.radio-inline48').css('background','gray');
 });
   $("#p2").click(function(){
   $('.radio-inline46').css('background','gray');
   $('.radio-inline47').css('background','gray');
   $('.radio-inline48').css('background','black');
 });



   $("#q").click(function(){
   $('.radio-inline49').css('background','black');
   $('.radio-inline50').css('background','gray');
   $('.radio-inline51').css('background','gray');
 });
  $("#q1").click(function(){
   $('.radio-inline49').css('background','gray');
   $('.radio-inline50').css('background','black');
   $('.radio-inline51').css('background','gray');
 });
   $("#q2").click(function(){
   $('.radio-inline49').css('background','gray');
   $('.radio-inline50').css('background','gray');
   $('.radio-inline51').css('background','black');
 });


    $("#r").click(function(){
   $('.radio-inline52').css('background','black');
   $('.radio-inline53').css('background','gray');
   $('.radio-inline54').css('background','gray');
 });
  $("#r1").click(function(){
   $('.radio-inline52').css('background','gray');
   $('.radio-inline53').css('background','black');
   $('.radio-inline54').css('background','gray');
 });
   $("#r2").click(function(){
   $('.radio-inline52').css('background','gray');
   $('.radio-inline53').css('background','gray');
   $('.radio-inline54').css('background','black');
 });


    $("#s").click(function(){
   $('.radio-inline55').css('background','black');
   $('.radio-inline56').css('background','gray');
   $('.radio-inline57').css('background','gray');
 });
  $("#s1").click(function(){
   $('.radio-inline55').css('background','gray');
   $('.radio-inline56').css('background','black');
   $('.radio-inline57').css('background','gray');
 });
   $("#s2").click(function(){
   $('.radio-inline55').css('background','gray');
   $('.radio-inline56').css('background','gray');
   $('.radio-inline57').css('background','black');
 });



    $("#t").click(function(){
   $('.radio-inline58').css('background','black');
   $('.radio-inline59').css('background','gray');
   $('.radio-inline60').css('background','gray');
 });
  $("#t1").click(function(){
   $('.radio-inline58').css('background','gray');
   $('.radio-inline59').css('background','black');
   $('.radio-inline60').css('background','gray');
 });
   $("#t2").click(function(){
   $('.radio-inline58').css('background','gray');
   $('.radio-inline59').css('background','gray');
   $('.radio-inline60').css('background','black');
 });


    $("#u").click(function(){
   $('.radio-inline61').css('background','black');
   $('.radio-inline62').css('background','gray');
   $('.radio-inline63').css('background','gray');
 });
  $("#u1").click(function(){
   $('.radio-inline61').css('background','gray');
   $('.radio-inline62').css('background','black');
   $('.radio-inline63').css('background','gray');
 });
   $("#u2").click(function(){
   $('.radio-inline61').css('background','gray');
   $('.radio-inline62').css('background','gray');
   $('.radio-inline63').css('background','black');
 });


    $("#v").click(function(){
   $('.radio-inline64').css('background','black');
   $('.radio-inline65').css('background','gray');
   $('.radio-inline66').css('background','gray');
 });
  $("#v1").click(function(){
   $('.radio-inline64').css('background','gray');
   $('.radio-inline65').css('background','black');
   $('.radio-inline66').css('background','gray');
 });
   $("#v2").click(function(){
   $('.radio-inline64').css('background','gray');
   $('.radio-inline65').css('background','gray');
   $('.radio-inline66').css('background','black');
 });
});

</script>