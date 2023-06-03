<?php
// if(isset($_files["image"])){
//     echo "<pre>";
//     print_r($_files);
//     echo"</pre>";
// }
if(isset($_FILES['img'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
}

$_name=$_FILES['img']['name'];

// $_type=$_FILES['img']['type'];

$_tmpname=$_FILES['img']['tmp_name'];

// $_error=$_FILES['img']['error'];

// $_size=$_FILES['img']['size'];

// move_uploaded_file($_tmpname,"upload-img".$_name);
if(move_uploaded_file($_tmpname,"upload-img". $_name)){
    echo "uploded susussfulley";

}
else{
    echo "uploaded unsussfulley";
}




// if(move_uploaded_file($file_tmp,"upload-img/".$file_name)){
//     echo "Successfully Uploaded";
// }
// else{
//    echo "Cloud not upload the file";
// }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="img"><br><br>
        <input type="submit" name="sub">

</form>
</body>
</html>