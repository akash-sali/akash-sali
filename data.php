
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.green.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    

        </head>
            <body>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Navbar</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="data.php">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="update.php">Update</a>
                               </li>
                              <li class="nav-item">
                              <a class="nav-link" aria-current="page" href="delete.php">Delete</a>
                              </li>
                            </ul>
                           

                          </div>
                        </div>
                        </nav>


    <div class="continer">
    <div class="row">
    <div class="col-sm-12">
    <?php
    $conn = mysqli_connect("localhost","root","","crud") or die("connection Failed");
    $sql = "SELECT * FROM akash JOIN newtable WHERE akash.aemail = newtable.cid";
    $result = mysqli_query($conn,$sql) or die ("query Unsuccessful.");
 


       
    ?>
    <table class="table table-bordered">
    <thead>
      <tr>
       <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>System</th>
      </tr>
    </thead>
    <tbody>
<?php 

while($row = mysqli_fetch_assoc($result)){
?>

      <tr>
        <td><?php echo $row ['aid']; ?></td>
        <td><?php echo $row ['aname']; ?></td>
        <td><?php echo $row ['sname']; ?></td>
        <td><?php echo $row ['aemail']; ?></td>
        <td>
      
      
        <a href="update.php?id=<?php echo $row ['aid']; ?>" class="link">EDIT </a>&nbsp;
        <a href="delete.php"class="link"> DELETE</a>
        </td>
      
      </tr>

    <?php } ?>

    </tbody>
  </table>

</div>


    </div>
    </div>
    </div>
</body>
</html>