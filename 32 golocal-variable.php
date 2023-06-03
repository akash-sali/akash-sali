<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>

     input{
         padding: 8px;
         margin: 20px;
     }
     label{
         font-weight: bold;
         font-size: 20px;
     }
 </style>
     
</head>

<body>

<form action="32get-& post.php" method="POST">
        <label for="firstname">firstname</label>  <input type="text" name="name"> <br>
  <label for="lastname">lastname</label>  <input type="text" name="last-name"><br>
  <label for="email">email</label> <input type="email" name="email"><br>
  <label for="password">password</label> <input type="password" name="password"><br>
  <label for="submit">submit</label><input type="submit" name="submit">

    </form>


<!-- 
     <form action="php.php"method="post">
        <label for="firstname">firstname</label>  <input type="text" name="name"> <br>

  <label for="lastname">lastname</label>  <input type="text" name="last-name"><br>
  <label for="email">email</label> <input type="email" name="email"><br>
  <label for="password">password</label> <input type="password" name="password"><br>
  <label for="submit">submit</label><input type="submit" name="submit"> -->


  
<!-- ek page me hi display karne ke liye  -->

<!--   
  <form action=""<?php  echo $_SERVER['PHP_SELF']?> method="post">
        <label for="firstname">firstname</label>  <input type="text" name="name"> <br>

  <label for="lastname">lastname</label>  <input type="text" name="last-name"><br>
  <label for="email">email</label> <input type="email" name="email"><br>
  <label for="password">password</label> <input type="password" name="password"><br>
  <label for="submit">submit</label><input type="submit" name="submit"><br> -->

<?php
// if(isset($_POST['submit'])){
//     echo $_POST['name']."<br>";
//     echo $_POST['last-name']."<br>";
// }
?>

    </form>
     
</body>
</html>

