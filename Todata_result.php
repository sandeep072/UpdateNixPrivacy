<?php
$conn=mysqli_connect("localhost","root","password","kick");


?>

<!DOCTYPE HTML>
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
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
    <a href="dashboard.php"><img src="nix.png" alt="nix" style="width: 45px;height: 45px;"></a>

  <a class="navbar-brand" href="#" style="color: white">Nix Privacy</a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<h3>External </h3>
<table class="table table-bordered table-sm">
  <?php
  // $query="SELECT Extern.*,Intern.*,sociall.* FROM Extern ORDER BY id DESC LIMIT 1";
  //$query="SELECT Extern.*, Intern.*, final.*, sociall.* FROM Extern, Intern, sociall, final ORDER BY id DESC LIMIT 1";

$query="SELECT * FROM Extern join Intern ON Extern.id = Intern.id
                                  join final ON Intern.id = final.id join sociall ON final.id = sociall.id order by Extern.id DESC limit 1";

   $result=mysqli_query($conn,$query);
  ?>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Data Owner</th>
      <th scope="col">Process</th>
      <th scope="col"></th>
    
    </tr>
  </thead>
  <?php
      while($rows=mysqli_fetch_assoc($result))
          {

  ?>
  <tbody>
    <tr> 
      <td scope="row"><?php echo $rows['id']; ?></td>
      <td><?php echo $rows['dataOwner']; ?></td>
       <td><?php echo $rows['process']; ?></td>
      <td > 
                <p> <strong>Personal Data </strong> </p> 


        <p class="pers">
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

                <?php echo $rows['CCN']; ?>,
                <?php echo $rows['BA']; ?>,
                <?php echo $rows['Cars']; ?>,
               <?php echo $rows['Houses']; ?>,
              <?php echo $rows['Appartments']; ?>,
              <?php echo $rows['Purchases']; ?>,
             <?php echo $rows['Sales']; ?>,
              <?php echo $rows['Credit']; ?>,
            <?php echo $rows['Income']; ?>,
           <?php echo $rows['Transactions']; ?>,
            <?php echo $rows['Textes']; ?>,
           <?php echo $rows['SH']; ?>,
          <?php echo $rows['CR']; ?>,
         <?php echo $rows['CS']; ?>,
          <?php echo $rows['CC']; ?>
                   
              <p>
<hr>

        <p id="ok"><strong>Special Category Data </strong> </p> 
        <?php echo $rows['R']; ?>,
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
          

            </td>
      
    </tr>

    <?php 
    }
    ?>
  </tbody>
</table>





</body>
</html>
