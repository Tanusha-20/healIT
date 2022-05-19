<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HMS</title>
  <link rel="stylesheet" type="text/css" href="">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</head>
<body>

  <section style= "background-color:#4FBDBA; height: 100px;">
    <div class="container-fluid">

   <nav class="navbar navbar-expand-lg navbar-info ">
    <h5 class="text-white" style="padding-top: 20px;">Hospital Management System</h5>

    <div class="ms-auto">

    <ul class="navbar-nav">

      

    <?php 

     if (isset($_SESSION['admin'])) {
        $user = $_SESSION['admin'];

        echo " <li class='nav-item'><a href='' class='nav-link text-white'>'$user'</a></li>
      <li class='nav-item'><a href='logout.php' class='nav-link text-white'>logout</a></li>";
     }
      
     else if(isset($_SESSION['doctor'])) {

       $user = $_SESSION['doctor'];

        echo " <li class='nav-item'><a href='' class='nav-link text-white'>'$user'</a></li>
      <li class='nav-item'><a href='logout.php' class='nav-link text-white'>logout</a></li>";
     }
     else if(isset($_SESSION['patient'])) {

       $user = $_SESSION['patient'];

        echo " <li class='nav-item'><a href='' class='nav-link text-white'>'$user'</a></li>
      <li class='nav-item'><a href='logout.php' class='nav-link text-white'>logout</a></li>";
     }

     else {
      echo " <li class='nav-item'><a href='index.php' class='nav-link text-white'>Home</a></li>
      <li class='nav-item'><a href='adminlogin.php' class='nav-link text-white'>Admin</a></li>
      <li class='nav-item'><a href='doctorlogin.php' class='nav-link text-white'>Doctor</a></li>
      <li class='nav-item'><a href='patientlogin.php' class='nav-link text-white'>Patient</a></li>'";
     }


   ?>



      
    
    </ul>
     </div>
   </nav>
    </div>
   </section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

