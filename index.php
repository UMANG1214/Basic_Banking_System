<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style type="text/css">
<!--
.style1 {
	color: #00ffff;
	font-family: raleway;
}
.style2 {
	font-family: raleway;
	font-weight: bold;
	font-size: 36px;
	font-style: italic;
}
.style3 {
	font-family: raleway;
	font-weight: bold;
	font-style: italic;
	font-size: 18px;
}
.style4 {color: #4000ff; font-family: raleway; font-size: 24px; }
-->
body{
  background-image: url("bank.gif");
  background-color: #cccccc;
    ##background-color: hsla(89, 43%, 51%, 0.3);
    ##background-image:url('money_trans.png');
    background-repeat:no-repeat;
    background-size:cover;
}

@media only screen and (max-width:300px){
    .text{
        font-size:11px;
    }
}
.center{
  float: center;
}
    </style>
</head>

  <body>
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3 class="style4">&nbsp;</h3>
                  <h3 class="style2">Sparks Bank Services</h3>
                  <h3 class="style1"></h3>
                  <h1 class="style1"></h1>
                  <p align="center">&nbsp;</p>
                </div>
              </div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act"><img src="customer.gif" width="160" height="144" class="img-fluid"><br>
                    <a href="createuser.php"><button>Create a User</button></a>
              </div>

                  <div class="col-md act"><img src="tm.gif" width="162" height="145" class="img-fluid"><br>
                    <a href="transfermoney.php"><button>Transfer Now</button></a>
              </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
      <br>
      <br>
      <p>&copy MAY2021. Made by <b>UMANG BANSAL</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
