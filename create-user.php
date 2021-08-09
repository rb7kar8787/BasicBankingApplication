<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>

<!-- *************************************Boostrap CDN ***************************************************************** -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!-- **********************************External Stylesheet************************************************************** -->
    <link rel="stylesheet" type="text/css" href="createuser.css">
   
  </head>


<body class="bg-image" style="background-image: url('images/createcust.jpg');height:100vh;background-repeat: no-repeat;background-size:cover ;background-position: center;">

<!-- **************************************Navbar Starts***********************************************8 -->
<nav>
     <div class="container-fluid p-3 mb-2 fixed-top bg-dark navbar-dark text-white">
        
            <center><a class="brand navbar-brand bg-primary" href="index.php">

                    <img src="https://icons.getbootstrap.com/assets/icons/bank2.svg" alt="bank-logo" width="30" height="24" >
                    <a class="navbar-brand" href="index.php">SFB Online Banking System</a>

           </center>
    
<nav>
      </div><br><br>  


<!-- *************************************PHP Script to insert New User Details In Database Table***************************************** -->
<?php
    include 'db.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $acc_no=$_POST['acc_no'];
    $balance=$_POST['balance'];
    $sql="insert into customerdetails(name,account_number,amount) values('{$name}','{$acc_no}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='index.php';
                     </script>";

    }
  }
?>


<!-- **********************************Top header************************************************* -->

<h2 class="text-center pt-4"><b>Create User</b></h2>
        <br>

<!-- **************************User Profile and User Creation or we say Registration Form*********************************************** -->

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
            <img class="img-fluid" src="images/user.jpg" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Account No." type="number" name="acc_no" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
        
 <div class=" container col-md-12">
        <div class=" col-sm-4 col-md-12 text-center">
           
            <a class="btn btn-warning" href="index.php" role="button">Cancel</a>
           
        </div>
</div>  

<!-- ***********************jquery and Bundale***************************************** -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



<!--***********************************Footer******************************************-->
    <footer class="page-footer font-small blue">
      <div class="footer-copyright text-center py-3">
          <p> ©  Copyright Aug 2021 || All Right Reserve || Rushikesh Satkar</p>
      </div>
    </footer>
    

</body>
</html> 