<!DOCTYPE html>
<html lang="en">
<head>
 
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Basic Banking System</title>
 
<!--****************************************Bootstrap CDN**********************************************-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
<!--**************************************jquery and bundle**************************************************-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>


<body class="bg-image" style="background-image: url('images/transfer-money.jpg');baheight:100vh;background-repeat: no-repeat;background-size:cover ;background-position: center;">

<!--*****************************************Navbar****************************************************************-->
<nav>
    <div class="container-fluid p-3 mb-2 bg-dark navbar-dark text-white">
        
        <center><a class="brand navbar-brand bg-primary" href="index.php">

           <img src="https://icons.getbootstrap.com/assets/icons/bank2.svg" alt="bank-logo" width="30" height="24" >
           <a class="navbar-brand" href="index.php">SFB Online Banking System</a>

        </center>
    

     </div>   
</nav>

<!-- ***************Ammount Transfer Form and logic*********************************************** -->
 <form action="view-transaction.php" method="post">
  <h3 class="text-center"><span style="background-color:yellowgreen;padding:5px"><b>Select Sender</b></h3>
 <div class="text-center">
 
 <?php
 #Displaying list of names from customerdetails

 include "db.php";
 $sql = "SELECT name FROM customerdetails";
 $result = mysqli_query($conn,$sql);
 if ($result->num_rows != 0) {
    echo '<label>Sender:<br>';
    echo '<select id="first-dd" name="sender">';
    echo '<option disabled selected>--Sender--</option>';

    $num_results = mysqli_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysqli_fetch_array($result);
        $name1 = $row['name'];
        echo '<option value="' .$name1. '">' .$name1. '</option>';
    }

    echo '</select>';
    echo '</label>';
  }
 ?>
 </div>
 <br>
 <br>
 <br>
 <script>
     //Jquery to hide the selected option in the first list
     $(document).ready(function() {
     $('#first-dd').change(function() {        
    value = this.value;
    $("#second-dd option[value!='" + value + "']").show();
    $("#second-dd option[value='" + value + "']").hide();                                               
});
     });
 </script>
 <h3 class="text-center"><span style="background-color:yellowgreen;padding:5px"><b>Select Recipient</b></span></h3>
 <div class="text-center">
     <?php
     #Displaying options excluding the selected value in the previous list
      include "db.php";
      $sql = "SELECT name FROM customerdetails";
      $result = mysqli_query($conn,$sql);
      if ($result->num_rows != 0) {
         echo '<label>Recipient:<br>';
         echo '<select id="second-dd" name="recipient">';
         echo '<option disabled selected>--Recipient--</option>';
     
         $num_results = mysqli_num_rows($result);
         for ($i=0;$i<$num_results;$i++) {
             $row = mysqli_fetch_array($result);
             $name2 = $row['name'];
             echo '<option value="' .$name2. '">' .$name2. '</option>';
         }
     
         echo '</select>';
         echo '</label>';
       }
    ?>
<br><br><br>
 <!--***********************Entering money***************************-->
 <div class="text-center">
     <h3 class="text-center"><span style="background-color:greenyellow;padding:5px"><b>Enter Amount to Transfer:</b></span></h3>
    <input placeholder="Enter Amount in rupees" type="text" name="amount" required>
 </div>
 <br><br><br>
 <div class="text-center">
  <input type="submit" onclick="confirmTransfer()" class="btn btn-warning" value="Confirm And Send">
  <script>
      //Confirming transaction
      function confirmTransfer(){
          alert("Do you want to continue with the transaction?");
      }
  </script>
 <div>
</form>

<br><br><br>
 <div class=" container col-md-12">
        <div class=" col-sm-12 col-lg-12 col-md-12 text-center">
           
            <a class="btn btn-warning" href="index.php" role="button">Cancel</a>
           
        </div>

<!--********************************Footer with copyright***************************************-->
<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">
  ©  Copyright Aug 2021 || All Right Reserve TO SFB|| Design And Develop By Rushikesh Satkar
  </div>
 </footer>
</div>
</body>
</html>