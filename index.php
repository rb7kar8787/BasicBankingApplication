<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Banking System</title>
  
<!--********************************Bootstrap CDN******************************************************************-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  
<!--*******************************jquery and bundle**********************************************************************-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head> 

<body class="bg-image" style="background-image: url('https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fcdn.yourarticlelibrary.com%2Fwp-content%2Fuploads%2F2013%2F10%2Fb800.jpg&f=1&nofb=1');height:100vh;background-repeat: no-repeat;background-size:cover ;background-position: center;">

  
<!--**************************************Navbar***************************************************************************-->
  <nav>
    <div class="container-fluid p-3 mb-2 bg-dark navbar-dark fixed-top text-white">
        
      <center><a class="brand navbar-brand bg-primary" href="index.php">
                  <img src="https://icons.getbootstrap.com/assets/icons/bank2.svg" alt="bank-logo" width="30" height="24" >
                  <a class="navbar-brand" href="index.php">SFB Online Banking System</a>
      </center>  
    </div>  
  </nav><br><br><br>
  
  
       <center>
               <p style="text-align: center;"><h1 style="color:rgb(223, 17, 86);"><b>Welcome</b></h1></p>
               <p style="text-align: center;"><h3 style="color: #cb10d8bd;">Sparks Foundation Banking</h3></p>
       </center> 
        
<!--************************************ Services ***********************************************************************-->
  <div class="services">     
    <div class="row">
        <center>
          <div class="col-lg-4">    
              <div class="list-group bg-danger" style="padding:5px 5px; border-radius: 20px; border:20px rebeccapurple;"><br>
                  <p style="text-align:center; color: sandybrown;"><b>We offer services like:</b></p>
                  <a id="translink" href="create-user.php" class="list-group-item list-group-item-action text-center bg-transparent"><b>Create Account</b></a><br>                                                    
                  <a id="custlink" href="view-all-customers.php" class="list-group-item list-group-item-action text-center bg-transparent"><b>View All Customers</b></a><br>  
                  <a id="translink" href="transfer-money.php" class="list-group-item list-group-item-action text-center bg-transparent"><b>Transfer Money</b></a><br>
                  <a id="alltranslink" href="view-transaction.php" class="list-group-item list-group-item-action text-center bg-transparent"><b>See All Transactions</b></a><br>
              </div>
          </div>
      </center>
      </div>
    </div>
    <div>
</div>

<!--************************************** Footer Starts *****************************************************************-->
    
<footer class="page-footer font-small blue fixed-bottom text-white">
          <div class="footer-copyright text-center py-3">
            <p> ©  Copyright Aug 2021 || All Right Reserve || Rushikesh Satkar</p>
          </div>
</footer>
    

</body>


</html>