<?php
/***database connectivity ******/

// $host="localhost";
// $user="root";
// $pass= "";
// $conn = mysqli_connect($host,$user,$pass)or die('connection is successfull');

// if($conn){
//     echo "connection sucessful";
// }
// else{
//     echo "connection loss<br>";
// }

/****ctrated database and table*****/

// $dbname= "newdb";
// $sql = "CREATE DATABASE $dbname";
// if(mysqli_query($conn,$sql)){
//     echo "database create<br>";
// }
// else{
//     echo "error";
// }
// $conn1 = mysqli_connect($host,$user,$pass,$dbname);

// $sql1 = "CREATE TABLE newtable(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     last VARCHAR(40) NOT NULL,
//     password VARCHAR(40) NOT NULL,
//     date TIMESTAMP
//     )";

// if(mysqli_query($conn1,$sql1)){
//     echo "Table create<br>";
// }
// else{
//     echo "Table not create";
// };


/******table insert *******/

$host="localhost";
$user="root";
$pass= "";
$dbname= "newdb";
 

$conn = mysqli_connect($host,$user,$pass,$dbname)or die('connection is successfull');

if(!isset($conn)){
    echo "connection loss";
}
else{
    echo "connection  sucessful<br>";
};

// $sql = "INSERT INTO newtable(id,name,last,password )
//     VALUE('','kiran','sali','1234'),
//     ('','yesh','sali','1234')";

    
// if(mysqli_query($conn,$sql)){
//     echo "insert sucesss";
// }
// else{
//     echo "insrt losss";
// }
$sql= "DELETE  FROM newtable WHERE id = '9'";
if(mysqli_query($conn,$sql)){
echo "delete sucess";
}
else{
    echo "update loss";
}

/*******DATA SELECT*********/

// $sql="SELECT id,name,last,email FROM newtable";
// $output=mysqli_query($conn,$sql);
// if(mysqli_num_rows($output)>0){
//     // $row = mysqli_fetch_assoc($output);
//     while($row=$row = mysqli_fetch_assoc($output)){
//         echo "id =". $row['id'].
//         ",name =". $row['name'].
//         ",email =". $row['email'].
//         "<br>";
//     }
// }
/****DELETE DATA ********/
// $sql = "DELETE FROM newtable WHERE id=15";
// mysqli_query($conn,$sql);


// $sql ="UPDATE newtable SET email='ajjubhai123@gamil.com'WHERE id=14";
// mysqli_query($conn,$sql);
/*******DATA INSERT*********/



// $sql="INSERT INTO newtable(id,name,last,email)

// VALUE('','ajay','sali','akash@gmail.com')";


// if(mysqli_query($conn,$sql)){
//     echo "Insert Table <br>";
// }
// else{
//     echo "Insert Loss";
// };


?>

<?php
// error_reporting(0);
// $host="localhost";
// $user="root";
// $pass= "";
// $dbname= "newdb";
 

// $conn = mysqli_connect($host,$user,$pass,$dbname);

// if(!$conn){
//     echo "connection loss";
// }
// else{
//     echo "connection  sucessful<br>";

// }

// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $email = $_POST['email'];
// $pass = $_POST['pass'];
// if($fname OR $lname OR $email OR $pass){

//     $sql="INSERT INTO newtable(id,name,last,email,password)

// VALUE('','$fname','$lname','$email','$pass')";



// if(mysqli_query($conn,$sql)){
//     // echo mysqli_insert_id($conn); // ye table ki last position ki  value ki id batata  he
//     echo " Insert Table <br>";
// }
// else{
//     echo "Insert Loss";
// };


// }
// else{
//     echo "fname,lname,email,pass  is must";
// }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- <form action="" method="post">
    First Name
    <input type="text" name="fname"></br>
    Last Name
    <input type="text" name="lname"></br>
    Email
    <input type="text" name="email"></br>
    Password
    <input type="password" name="pass"></br>

    <input type="submit" >
    </form> -->
</body>
</html>