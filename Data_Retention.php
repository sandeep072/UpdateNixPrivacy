<?php
 include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>DPO</title>
     <meta charset="utf-8" name="viewport" content= "width=device-width, initial-scale=1.0"> 

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css"
    rel="stylesheet" type="text/css" />


  <style type="text/css">
    
     a:link {
  text-decoration: none;

}
a{
  color: black;
}

  </style>
  
</head>
<body style="background-color: #F9F9FC">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-default">
  <a href="dashboard.php"><img src="nix.png" alt="nix" style="width: 45px;height: 45px;"></a>
		<a href="" class="navbar-brand">Nix Privacy</a>
</nav>


<div class="container-fluid">
  <div class="row">
             <div class="col-md-2 bg-white">
      <p>  <button type="button" class="btn"><a href="Data_Owner.php" >Purpose And Usages</a></button></p>
      <p><button type="button"  class="btn">Data-Retention</button>   </p>
      <p>  <button  type="button" class="btn btn-md"><a href="Data_Acontrol.php">Data Access Control</a></button></p>
       <p><button type="button" class="btn" ><a href="Privacy_Policy.php">Privacy Policy</a></button>   </p>
                   <p><button class="btn btn-md" type="button" id="e">Consent Management</button></p>
                     <p><button class="btn btn-md" type="button" id="e">DPIA</button></p>
            </div>

  <div class="container">
  <div class="row">
    <div class="col-md-12 bg-white">
<table class="table table-bordered " id="t2">
  <?php
  $query="SELECT * FROM Extern join Intern on Extern.id = Intern.id join final on Intern.id = final.id join sociall on final.id = sociall.id join dpo on sociall.id = sociall.id order by Extern.id desc limit 1";
   $result=mysqli_query($conn,$query);
  ?>
  <thead>
  
    <tr>
      <th scope="col">Retention Period</th>
      <th scope="col">Process Involved</th> 
      <th scope="col">Nature of Data</th>
      <th scope="col">Type of Data</th>
      <th scope="col">Action</th>
      <th scope="col">Person Responsible</th>
      <th scope="col">Target Date</th>
        <th scope="col">Other Parties Involved</th>  
    </tr>
  </thead>
    <?php
      while($rows=mysqli_fetch_assoc($result))
         {
  
    ?>
  <tbody>
    
    <tr>
      <td><?php echo $rows['dr'];?></td>
      <td><?php echo $rows['process'];?></td>
      <td><?php echo $rows['nod'];?></td>
    <td> <p><button type="button" class="form-control btn btn-default" id="ped" >Personal Data</button></p><br>
       <p class="pers" align = "center">
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
      	<div class="form-group">
        <div class="row">
        <div class="col-md-12">
          
            <select class="form-control" id="exampleSelectd">
              <option>Review</option>
              <option>Reduce</option>   
               <option>Pemove Retention</option>   
                <option>Change Period</option>   
                 <option>Status quo</option>   
                          
            </select>
    </div>
        </div>
        </div>
      </td>
      <td>
        <input type="text" name="pes" class="form-control">
      </td>
      <td>
<input type="date" name="date" class="form-control">
      </td>
        <td>
          <input type="text" name="othe" class="form-control">
        </td>
    </tr>


  
  

  </tbody>

<?php
}
?>
</table>

</div>
</div>
<br>
 
</div>
</div> 
</div>
<br>

</body>
</html>
<script type="text/javascript">
    $(function () {
        $(".k").dialog({
            modal: true,
            autoOpen: false,
            title: "Special Category Data",
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