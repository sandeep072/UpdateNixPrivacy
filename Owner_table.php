<?php
include "connect.php";
if(isset($_POST['submit']))
{
   $nod=$_POST['nod'];
   $ds=$_POST['ds'];
   $lis=$_POST['lis'];
   $sod=$_POST['sod'];
   $dpu=$_POST['dpu'];
   $dsl=$_POST['dsl'];
   $dal=$_POST['dal'];
   $ac=$_POST['ac'];
    $pp=$_POST['pp'];
   
   $pdp=$_POST['pdp'];
   $dtl=$_POST['dtl'];
   $dr=$_POST['dr'];
   $sql="INSERT INTO dpo(nod,ds,lis,sod,dpu,dsl,dal,ac,pp,pdp,dtl,dr) values('$nod','$ds','$lis','$sod','$dpu','$dsl','$dal','$ac','$pp','$pdp','$dtl','$dr')";
   if(mysqli_query($conn,$sql))
   {

    echo "successfully";
     header("Location:Data_Owner.php");
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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />




</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
  <a href="dashboard.php"><img src="nix.png" alt="nix" style="width: 45px;height: 45px;"></a>
  <a class="navbar-brand" href="#" style="color: white">Details </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>


<form method="post">
    <div class="col-md-12 bg-light">
      <h3></h3>
     
<table class="table table-bordered ">

   <?php

   $query="SELECT * FROM Extern join Intern ON Extern.id = Intern.id
                                  join final ON Intern.id = final.id join sociall ON final.id = sociall.id order by Extern.id DESC limit 1";

   $result=mysqli_query($conn,$query);
  ?>

  <thead style="background-color: #563D7C;color: white">
    <tr class="Do" class="">
      <th scope="col">Data Owner</th>
      <th scope="col">Process Involved</th> 
      <th scope="col">Nature of Data</th>
      <th scope="col">Type of Data</th>
      <th scope="col">Data Subject</th>
      <th scope="col">Location in system</th>
      <th scope="col">Source of Data</th> 
      <th scope="col">Data Purpose and usages</th>
    
    </tr>
  </thead>
    <?php
      while($rows=mysqli_fetch_assoc($result))
          {

  ?>
  <tbody>


    <tr class="DD">
      <td><?php echo $rows['dataOwner']; ?></td>
      <td><?php echo $rows['process']; ?></td>
      <td>
         <textarea class="form-control" name="nod" rows="3" placeholder="eg:-Application data,Control data etc.."></textarea>
      </td>
      <td> <p><button type="button" class="form-control btn btn-default" id="ped" >Personal Data</button></p><br>
             

       <p class="pers" style="display: none;" align = "center">
        <?php echo $rows['name']; ?>,
        <?php echo $rows['un']; ?>,
        <?php echo $rows['pic']; ?>,
        <?php echo $rows['GI']; ?>,
        <?php echo $rows['BB']; ?>,
       <?php echo $rows['cl']; ?>,
        <?php echo $rows['Lc']; ?>,
       <?php echo $rows['Da']; ?>,
        <?php echo $rows['LR']; ?>,
       <?php echo $rows['Attitude']; ?>,
        <?php echo $rows['Pt']; ?>,
      <?php echo $rows['IB']; ?>,
        <?php echo $rows['Ge']; ?>,
        <?php echo $rows['Dei']; ?>,
        <?php echo $rows['WE']; ?>,
          <?php echo $rows['age']; ?>,
        <?php echo $rows['Sk']; ?>,
        <?php echo $rows['Gender']; ?>,
        <?php echo $rows['tabl']; ?>,
        <?php echo $rows['Piercings']; ?>,
        <?php echo $rows['Thought']; ?>,
        <?php echo $rows['wtk']; ?>,
        <?php echo $rows['wst']; ?>,
        <?php echo $rows['Pass']; ?>,
        <?php echo $rows['PIN']; ?>,
        <?php echo $rows['Mmn']; ?>,
       <?php echo $rows['Opinions']; ?>,
        <?php echo $rows['Intentions']; ?>,
       <?php echo $rows['Interests']; ?>,
        <?php echo $rows['Favorite']; ?>,
       <?php echo $rows['Colors']; ?>,
        <?php echo $rows['Likes']; ?>,
       <?php echo $rows['Dislikes']; ?>,
        <?php echo $rows['Music']; ?>,
        <?php echo $rows['JT']; ?>,
        <?php echo $rows['Salary']; ?>,
        <?php echo $rows['WH']; ?>,
        <?php echo $rows['SA']; ?>,
        <?php echo $rows['EF']; ?>,
        <?php echo $rows['Evaluations']; ?>,
        <?php echo $rows['EH']; ?>,
        <?php echo $rows['Evaluations']; ?>,
        <?php echo $rows['Re']; ?>,
        <?php echo $rows['Interviews']; ?>
        ,<?php echo $rows['Certifications']; ?>,
        <?php echo $rows['DAS']; ?>,
        <?php echo $rows['Sibilings']; ?>,
        <?php echo $rows['Chr']; ?>, 
          <?php echo $rows['GR']; ?>,
             <?php echo $rows['SS']; ?>,
                <?php echo $rows['MS']; ?>,
                 <?php echo $rows['Interactions']; ?>,
                  <?php echo $rows['CMD']; ?>,
                   <?php echo $rows['FS']; ?>,
                 <?php echo $rows['Offspring']; ?>,
                 <?php echo $rows['Rp']; ?>,
                  <?php echo $rows['Friends']; ?>,
                   <?php echo $rows['Connections']; ?>,
                    <?php echo $rows['Acquaintances']; ?>,
                     <?php echo $rows['VM']; ?>,
                  <?php echo $rows['Email']; ?>,
                   <?php echo $rows['TR']; ?>,
         <?php echo $rows['CCN']; ?>
        <?php echo $rows['BA']; ?>
        <?php echo $rows['Cars']; ?>
        <?php echo $rows['Houses']; ?>
        <?php echo $rows['Appartments']; ?>
        <?php echo $rows['Purchases']; ?>
       <?php echo $rows['Sales']; ?>
        <?php echo $rows['Credit']; ?>
       <?php echo $rows['Income']; ?>
       <?php echo $rows['Transactions']; ?>
        <?php echo $rows['Textes']; ?>
      <?php echo $rows['SH']; ?>
        <?php echo $rows['CR']; ?>
        <?php echo $rows['CS']; ?>
        <?php echo $rows['CC']; ?>
                   
              <p>


        <p id="ok"><button type="button" class="form-control btn btn-default" >Special Category Data </button> </p> 
        <p class="k"> <?php echo $rows['R']; ?>,
          <?php echo $rows['Ne']; ?>,
          <?php echo $rows['Ls']; ?>,
          <?php echo $rows['Di']; ?>,
          <?php echo $rows['Ac']; ?>,
          <?php echo $rows['Pre']; ?>,
          <?php echo $rows['Pro']; ?>,
          <?php echo $rows['fe']; ?>,
          <?php echo $rows['history']; ?>,
          <?php echo $rows['Pmh']; ?>,
        <?php echo $rows['Dtr']; ?>,
        <?php echo $rows['Dis']; ?>,
        <?php echo $rows['Fih']; ?>,
        <?php echo $rows['HR']; ?>,
        <?php echo $rows['BT']; ?>, 
          <?php echo $rows['HC']; ?>,
             <?php echo $rows['ui']; ?>,
                <?php echo $rows['bd']; ?>,
                 <?php echo $rows['RB']; ?>,
                  <?php echo $rows['PB']; ?>,
                   <?php echo $rows['c']; ?>,
                 <?php echo $rows['Convictions']; ?>,
                 <?php echo $rows['Charges']; ?>,
                  <?php echo $rows['Pardons']; ?>,
                   <?php echo $rows['Religion']; ?>,
                    <?php echo $rows['PA']; ?>
              <p>
      </td>
      
       <td>

      <textarea class="form-control" rows="3" name="ds" id="comment" placeholder="eg:- Job Applicant,sales prospect etc.."></textarea>
  
        <!-- <input type="text" name="name" ng-model="name" id="name1" class="form-control" placeholder="eg :- Job Applicant,sales prospect etc.." style="height: 120px;"> --></td>
  
      <td>
              <textarea class="form-control" rows="3" name="lis" id="comment" placeholder="eg:- Github,CRM,ERP etc.."></textarea>

           <!-- <input type="text" name="name" id="name1" class="form-control" placeholder="eg :- Github,CRM,ERP etc.."> -->
         </td>
       <td>
            <textarea class="form-control" rows="3" name="sod" id="comment" placeholder="eg:-Google Job Application form etc.."></textarea>

         <!-- <input type="text" name="name" id="name1" class="form-control" placeholder="eg :- Google Job Application form etc.."> -->

       </td>
      <td><div class="form-group">         
            <select class="form-control" name="dpu" id="example" onchange='CheckColors(this.value);'>
              <option>Fill Purpose</option>
              <option>Not Sure</option> 
              <option>Not Purpose</option>          
            </select>
        </div>
        <input type="text" class="form-control" id="color">
        </td>
        <script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('color');
 if(val=='pick a color'||val=='Fill Purpose')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script> 


  <?php 
   }
     ?>
    </tr>
    <tr style="background-color: #563D7C;color: white">
      
       <th scope="col">Data Storage location</th>
      <th scope="col">Data Access Location</th>
      <th scope="col">Access Control</th>
      <th scope="col">Privacy Policy</th> 
      <th scope="col">3rd Party data Process</th>
      <th scope="col">Data Transfer to Locations</th>
      <th scope="col">Data Retention</th> 
      <th scope="col"></th> 
    </tr>
    <tr>
      
       <td>
         <textarea class="form-control" rows="3" name="dsl" id="comment" placeholder="eg:-Server Location  etc.."></textarea>

      <!-- <input type="text" name="name" id="name1" class="form-control" placeholder="eg :-  ."> -->
      </td>
     <td>  
         <textarea class="form-control"  name=" dal" rows="3" placeholder="eg:- etc.."></textarea>
     </td>
      <td>   
     <textarea class="form-control" rows="3" name="ac" id="comment" placeholder="eg:-Enter names destination of people who have access etc.."></textarea>

               <!-- <input type="text" name="name" id="name1" class="form-control" placeholder="eg :- Enter names destination of people who have access  etc.."> -->
    </td>
       <td>
          <div class="form-group">
        <div class="row">
        <div class="col-md-12">
            <select class="form-control" name="pp" id="exampleSelectd">
              <option></option>
              <option>Policy Exists</option> 
               <option>No Policy</option>              
            </select>
    </div>
        </div>
        </div>
       </td>
      <td>
    <textarea class="form-control" rows="3" name="pdp" id="comment" placeholder="eg:-Nixpanel (or) Other transfer who process your data  etc.."></textarea>
              <!-- <input type="text" name="name" id="name1" class="form-control" placeholder="eg :- Nixpanel (or) Other transfer who process your data  etc.."> -->

      </td>
       <td>    
     <textarea class="form-control" rows="3" name="dtl" id="comment" placeholder="eg:-...to US.. "></textarea>
               <!-- <input type="text" name="name" id="name1" class="form-control" placeholder="eg :- ...to us ect..   etc.."> -->
      </td>
      <td>          
       <textarea class="form-control" rows="3" name="dr" id="comment" placeholder="eg:-12 months, 3 months..etc."></textarea>

        <!-- <input type="text" name="name" id="name1" class="form-control" placeholder="eg :-12 months,3 months..   etc.."> -->
</td>  
<td></td>
    </tr>
  
  </tbody>

</table>

</div>
<center><input type="submit" class="btn btn-success" name="submit"  value="submit"></center>
</form>
</body>
</html>



<script type="text/javascript">
  $(document).ready(function(){
   $('.Do').click(function(){
        $('.DD').toggle();
   });

  });
</script>
<script >
  $(document).ready(function(){
    $('.k').hide();
    $('.pers').hide();
    $('#ok').click(function(){
      $('.k').toggle();
    });
    $('#ped').click(function(){
      $('.pers').toggle();
    });
  });
</script>
<!-- <script type="text/javascript">
    $("#ok").live("click", function () {
        $(".k").dialog({
            title: "Special Category Data",

            buttons: {
               
            }
        });
        return false;
    });
</script> -->
<script type="text/javascript">
    $(function () {
        $(".k").dialog({
            modal: true,
            autoOpen: false,
            title: "Personal Data",
            width: 700,
            height: 250

        });
        $("#ok").click(function () {
            $('.k').dialog('open');
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $(".pers").dialog({
            modal: true,
            autoOpen: false,
            title: "Personal Data",
            
            width: 700,
            height: 250

        });
        $("#ped").click(function () {
            $('.pers').dialog('open');
        });
    });
</script>
