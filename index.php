<?php
if(isset($_POST['name'])){    
    $server = "localhost";
    $user  = "root";
    $password = "";

    $con = mysqli_connect($server,$user,$password);
    if(!$con){
        die("conection to this data base is failed");

    }
   
    
    $sno =$_POST["sno"];
    $name =$_POST["name"];
    $gender =$_POST["gender"];
    $age =$_POST["age"];
    $email =$_POST["email"];
    $phone =$_POST["phone"];
    $other =$_POST["other"] ;

    
    $sql = "INSERT INTO `trip`.`trip_table` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
     VALUES ('$sno','$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    
   

    if($con->query($sql)==true){
        
    }


    $con->close();
}

?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
    <form class="row g-3" action="index.php" method="post">
        <input class="form-control form-control-lg" type="text" name="sno" placeholder="sno" aria-label=".form-control-lg example">
        <input class="form-control form-control-lg" type="text" name="name" placeholder="name" aria-label=".form-control-lg example">
        <input class="form-control form-control-lg" type="text" name="age" placeholder="age" aria-label=".form-control-lg example">
        <input class="form-control form-control-lg" type="text" name="gender" placeholder="gender" aria-label=".form-control-lg example">
        <input class="form-control form-control-lg" type="text" name="email" placeholder="email" aria-label=".form-control-lg example">
        <input class="form-control form-control-lg" type="text" name="phone" placeholder="phone" aria-label=".form-control-lg example">
        <input class="form-control form-control-lg" type="text" name="other" placeholder="other" aria-label=".form-control-lg example">
 
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>