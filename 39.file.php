<?php
// file ko upload kiya he ya nahi ye check karega .

// ye image name input wala name ki value he 

// ye statement server ki information array me dega 
if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

}
// // // file_uploding 
// $file_name = $_FILES['image']['name'];
// $file_size = $_FILES['image']['size'];
// $file_tmp = $_FILES['image']['tmp_name'];
// $file_type = $_FILES['image']['type'];

//  move_uploaded_file($file_tmp,"file-upload".$file_name);

// message print karne ke liye 

// if(move_uploaded_file($file_tmp,"upload-img/".$file_name)){
//     echo "Successfully Uploaded";
// }
// else{
//    echo "Cloud not upload the file";
// }
// }
?>

<html>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image"/><br><br>
    <input type="submit"/>
    </form>
</body>
</html>