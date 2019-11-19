<!DOCTYPE HTML>
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
  <a class="navbar-brand" href="#" style="color: white">Controllers Checklists</a>
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
              </div>

  <div class="container bg-light "> 
  <div class="row">
              <div class="col-md-12">
                <div class="container-fluid">
                  <button type="button" class="btn btn-primary"><a href="details.php" style="color: white">Controllers Checklist</a></button>
<button type="button" class="btn btn-secondary"><a href="detpro.html" style="color: white">Processors Checklist</a></button>
<button type="button" class="btn btn-success"><a href="detpinfo.html" style="color: white">Information Securit</a></button>
<button type="button" class="btn btn-danger"><a href="detdir.html" style="color: white">Direct Marketing</a></button>
<button type="button" class="btn btn-warning"><a href="detrecord.html" style="color: white">Records Management</a></button>
<button type="button" class="btn btn-info"><a href="detdssa.html" style="color: white">Data Sharing and Subject Access</a></button>
<button type="button" class="btn btn-primary"><a href="detcctv.html" style="color: white">CCTV</a></button>
<hr>
                 <h4>Check Your GDPR Complaince</h4>
                    <div id="demo-accordion-collapse" role="tablist">
                      <div class="card">
                       <div class="card-header" role="tab" id="accord1">
                          <a class="collapsed" data-toggle="collapse" href="#collapse-pane-1" role="button" aria-expanded="false" aria-controls="collapse-pane-1">
         Lawfulness, fairness and transparency
                      </a>
                       </div>
    <div id="collapse-pane-1" class="collapse show" role="tabpanel" aria-labelledby="accord1" data-parent="#demo-accordion-collapse">
      <div class="card-body">
      <div class="container-fluid">
        <h3>1 Information you hold</h3>
          <h4> Your business has conducted an information audit to map data flows.</h4>
          <input type="radio" name="a" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="a" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="a" Id="n1"> Successfully implemented<br>
             <input type="radio" name="a" Id="n1"> Not applicable<br>
     </div>
<div class="container-fluid">
  <h4>Your business has documented what personal data you hold, where it came from, who you share it with and what you do with it.  </h4>
  <input type="radio" name="b" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="b" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="b" Id="n1"> Successfully implemented<br>
             <input type="radio" name="b" Id="n1"> Not applicable<br>
</div>
<div class="container-fluid">
   <h3>1.2 Lawful basis for processing personal data.</h3>
  <h4> Your business has reviewed how you ask for and record consent.</h4>
   <input type="radio" name="c" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="c" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="c" Id="n1"> Successfully implemented<br>
             <input type="radio" name="c" Id="n1"> Not applicable<br>
</div>
<div class="container-fluid">
  <h3>1.3 Consent</h3>
  <h4> Your business has systems to record and manage ongoing consent.</h4>
  <input type="radio" name="d" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="d" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="d" Id="n1"> Successfully implemented<br>
             <input type="radio" name="d" Id="n1"> Not applicable<br>
</div>
<div class="container-fluid">
  <h4> If your business relies on consent to offer online services directly to children, you have systems in place to manage it.</h4>
   <input type="radio" name="e" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="e" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="e" Id="n1"> Successfully implemented<br>
             <input type="radio" name="e" Id="n1"> Not applicable<br>
</div>
<div class="container-fluid">
  <h3>1.4 Consent to process children’s personal data for online services</h3>
  <h4>If you may be required to process data to protect the vital interests of an individual, your business has clearly documented the circumstances where it will be relevant. Your business documents your justification for relying on this basis and informs individuals where necessary.</h4>
  <input type="radio" name="f" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="f" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="f" Id="n1"> Successfully implemented<br>
             <input type="radio" name="f" Id="n1"> Not applicable<br>
</div>
<div class="container-fluid">
  <h3>1.5 Vital interests</h3>
  <h4> If you may be required to process data to protect the vital interests of an individual, your business has clearly documented the circumstances where it will be relevant. Your business documents your justification for relying on this basis and informs individuals where necessary.</h4>
  <input type="radio" name="g" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="g" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="g" Id="n1"> Successfully implemented<br>
             <input type="radio" name="g" Id="n1"> Not applicable<br>
</div>
<div class="container-fluid">
  <h3>1.6 Legitimate interests.</h3>
  <h4> If you are relying on legitimate interests as the lawful basis for processing, your business has applied the three part test and can demonstrate you have fully considered and protected individual’s rights and interests.
</h4>
  <input type="radio" name="g" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="g" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="g" Id="n1"> Successfully implemented<br>
             <input type="radio" name="g" Id="n1"> Not applicable<br>
</div>
<div class="container-fluid">
  <h3>1.7 Data Protection Fee</h3>
  <h4> Your business is currently registered with the Information Commissioner's Office.
</h4>
  <input type="radio" name="g" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="g" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="g" Id="n1"> Successfully implemented<br>
             <input type="radio" name="g" Id="n1"> Not applicable<br>
</div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" role="tab1" id="accord2">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-2" role="button" aria-expanded="false" aria-controls="collapse-pane-2">
          Individual Rights
        </a>
      </h5>
    </div>
   <div id="collapse-pane-2" class="collapse" role="tabpanel" aria-labelledby="accord2" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container">
              <h3>2.1 Right to be informed including privacy information</h3>
               <h4> Your business has provided privacy information to individuals. </h4>
               <input type="radio" name="h" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="h" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="h" Id="n1"> Successfully implemented<br>
             <input type="radio" name="h" Id="n1"> Not applicable<br>
             </div>
           <div class="container-fluid">
            <h3>2.2 Communicate the processing of children’s personal data</h3>
              <h4> If your business offers online services directly to children, you communicate privacy information in a way that a child will understand.</h4>
                <input type="radio" name="i" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="i" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="i" Id="n1"> Successfully implemented<br>
             <input type="radio" name="i" Id="n1"> Not applicable<br>
           </div>
         <div class="container-fluid">
          <h3>2.3 Right of access</h3>
            <h4> Your business has a process to recognise and respond to individuals' requests to access their personal data.</h4>
             <input type="radio" name="j" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="j" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="j" Id="n1"> Successfully implemented<br>
             <input type="radio" name="j" Id="n1"> Not applicable<br>
         </div>
         <div class="container-fluid">
          <h3>2.4 Right to rectification and data quality</h3>
            <h4> Your business has processes to ensure that the personal data you hold remains accurate and up to date.</h4>
               <input type="radio" name="k" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="k" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="k" Id="n1"> Successfully implemented<br>
             <input type="radio" name="k" Id="n1"> Not applicable<br>
           </div>
         <div class="container-fluid">
          <h3>2.5 Right to erasure including retention and disposal</h3>
            <h4>Your business has a process to securely dispose of personal data that is no longer required or where an individual has asked you to erase it.</h4>
             <input type="radio" name="l" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="l" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="l" Id="n1"> Successfully implemented<br>
             <input type="radio" name="l" Id="n1"> Not applicable<br>
         </div>
         <div class="container-fluid">
          <h3>2.6 Right to restrict processing</h3>
              <h4>Your business has procedures to respond to an individual’s request to restrict the processing of their personal data.</h4>
             <input type="radio" name="m" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="m" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="m" Id="n1"> Successfully implemented<br>
             <input type="radio" name="m" Id="n1"> Not applicable<br>
           </div>
         <div class="container-fluid">
          <h3>2.7 Right to data portability
</h3>
            <h4>Your business has processes to allow individuals to move, copy or transfer their personal data from one IT environment to another in a safe and secure way, without hindrance to usability.</h4>
             <input type="radio" name="n" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="n" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="n" Id="n1"> Successfully implemented<br>
             <input type="radio" name="n" Id="n1"> Not applicable<br>
         </div>
           <div class="container-fluid">
            <h3>2.8 Right to object
</h3>
            <h4>Your business has procedures to handle an individual’s objection to the processing of their personal data.
</h4>
             <input type="radio" name="o" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="o" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="o" Id="n1"> Successfully implemented<br>
             <input type="radio" name="o" Id="n1"> Not applicable<br>
         </div> 
           <div class="container-fluid">
            <h3>2.9 Rights related to automated decision making including profiling
</h3>
            <h4>2.9 Your business has identified whether any of your processing operations constitute automated decision making and have procedures in place to deal with the requirements.
</h4>
             <input type="radio" name="p" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="p" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="p" Id="n1"> Successfully implemented<br>
             <input type="radio" name="p" Id="n1"> Not applicable<br>
         </div>

      </div>
  </div>
  </div>


  <div class="card">
    <div class="card-header" role="tab2" id="accord3">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-3" role="button" aria-expanded="false" aria-controls="collapse-pane-3">
          Accountability and governance 
        </a>
      </h5>
    </div>
  <div id="collapse-pane-3" class="collapse" role="tabpanel" aria-labelledby="accord3" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container-fluid">
              <h3>3.1 Accountability</h3>
                 <h4>Your business has an appropriate data protection policy.</h4>
              <input type="radio" name="q" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="q" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="q" Id="n1"> Successfully implemented<br>
             <input type="radio" name="q" Id="n1"> Not applicable<br>
               </div>
              <div class="container-fluid">
               <h4>Your business monitors your own compliance with data protection policies and regularly reviews the effectiveness of data handling and security controls.</h4>
             <input type="radio" name="r" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="r" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="r" Id="n1"> Successfully implemented<br>
             <input type="radio" name="r" Id="n1"> Not applicable<br>
              </div>
             <div class="container-fluid">
             <h4>Your business provides data protection awareness training for all staff.
 </h4>
         <input type="radio" name="s" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="s" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="s" Id="n1"> Successfully implemented<br>
             <input type="radio" name="s" Id="n1"> Not applicable<br>
           </div>  
           <div class="container-fluid"> 
            <h3>3.2 Processor contracts.</h3>
               <h4>Your business has a written contract with any processors you use.
</h4>
<input type="radio" name="t" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="t" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="t" Id="n1"> Successfully implemented<br>
             <input type="radio" name="t" Id="n1"> Not applicable<br>
               </div>
              <div class="container-fluid">
                <h3>3.3 Information risks.</h3>
               <h4>Your business manages information risks in a structured way so that management understands the business impact of personal data related risks and manages them effectively.
 </h4>
 <input type="radio" name="u" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="u" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="u" Id="n1"> Successfully implemented<br>
             <input type="radio" name="u" Id="n1"> Not applicable<br>
              </div>
             <div class="container-fluid">
              <h3>3.4 Data Protection by Design
</h3x
             <h4>Your business has implemented appropriate technical and organisational measures to integrate data protection into your processing activities.
</h4>
<input type="radio" name="v" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="v" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="v" Id="n1"> Successfully implemented<br>
             <input type="radio" name="v" Id="n1"> Not applicable<br>
           </div>
           <div class="container-fluid">
            <h3>3.5 Data Protection Impact Assessments (DPIA)
</h3>
             <h4>Your business understands when you must conduct a DPIA and has processes in place to action this.
</h4>
<input type="radio" name="w" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="w" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="w" Id="n1"> Successfully implemented<br>
             <input type="radio" name="w" Id="n1"> Not applicable<br>
           </div>
           <div class="container-fluid">
             <h4>Your business has a DPIA framework which links to your existing risk management and project management processes.
</h4>
<input type="radio" name="x" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="x" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="x" Id="n1"> Successfully implemented<br>
             <input type="radio" name="x" Id="n1"> Not applicable<br>
           </div>  
           <div class="container-fluid">
            <h3>3.6 Data Protection Officers (DPO)
</h3>
             <h4>Your business has nominated a data protection lead or Data Protection Officer (DPO).</h4>
             <input type="radio" name="y" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="y" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="y" Id="n1"> Successfully implemented<br>
             <input type="radio" name="y" Id="n1"> Not applicable<br>
           </div>
           <div class="container">
            <h3>3.7 Management Responsibility</h3>
                      </div>
           <div class="container-fluid">
             <h4> Decision makers and key people in your business demonstrate support for data protection legislation and promote a positive culture of data protection compliance across the business.
</h4>
          <input type="radio" name="z" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="z" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="z" Id="n1"> Successfully implemented<br>
             <input type="radio" name="z" Id="n1"> Not applicable<br>
           </div>
   </div>



  </div>
   <div class="card">
    <div class="card-header" role="tab2" id="accord3">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapse-pane-4" role="button" aria-expanded="false" aria-controls="collapse-pane-4">
          Data security, international transfers and breaches

        </a>
      </h5>
    </div>
  <div id="collapse-pane-4" class="collapse" role="tabpanel" aria-labelledby="accord4" data-parent="#demo-accordion-collapse">
          <div class="card-body">
             <div class="container-fluid">
              <h3>4.1 Security</h3>
                 <h4>We undertake an analysis of the risks presented by our processing, and use this to assess the appropriate level of security we need to put in place. </h4>
 <input type="radio" name="p1" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="p1" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="p1" Id="n1"> Successfully implemented<br>
             <input type="radio" name="p1" Id="n1"> Not applicable<br>
               </div>
              <div class="container-fluid">
                <h3>4.2 Breach notification.</h3>
               <h4>When deciding what measures to implement, we take account of the state of the art and costs of implementation. </h4>
 <input type="radio" name="p2" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="p2" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="p2" Id="n1"> Successfully implemented<br>
             <input type="radio" name="p2" Id="n1"> Not applicable<br>
              </div>
             <div class="container-fluid">
              <h3>4.3 International transfers.</h3>
        <h4>We have an information security policy (or equivalent) and take steps to make sure the policy is implemented.</h4>
 <input type="radio" name="p3" Id="n1"> Not yet implemented or planned<br>
           <input type="radio" name="p3" Id="n1"> Partially implemented or planned<br>
            <input type="radio" name="p3" Id="n1"> Successfully implemented<br>
             <input type="radio" name="p3" Id="n1"> Not applicable<br>
           </div>    
   </div>
    </div>
  </div>







</div>
</div>
<button type="button" class="btn btn-success" style="margin-top:20px;" onclick="window.location.href='.html'">Submit</button>

</div>
</div>


</div>
</div>
</div>
</div>
<br>
<br>
</body>
</html>