
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <?php
  // echo "cookie value : " . $_COOKIE["user"];
  // echo "<pre>";print_r($_SERVER);4
//  $data= phpinfo();
// change color  first charactor of string  
//   $str = "PHP string";

// preg_replace('/(\b[a-z])/i','<span style= "color:red">\1</span>',$str);
//   print_r($str);  

// $a=10;
// $b=20;

// $tem=$a;
// $a=$b;

// $b=$tem;
// echo $a;die;
// list($a,$b)=array($b,$a);
// $b=$tem;
// echo $a." and ".$b;  


// 1. Find maximum and minimum numbers from a given array without using the array function
// Input = [100, 4, 9, 25, 36]
// Output =  Max => 100, Min => 4

// 2. Print last 10 numbers which is divisible by 3 between 10 to 100

// 3. Find the match square root value.
// arrayValue = [1, 2, 3, 4, 5, 6, 7];
// squareRootArray = [1, 4, 9, 25, 36];
// output = [1, 2, 3, 5, 6]

// company practice
// Here

// 1)


// echo "max => ". $arr[0];
// echo "min => ". $arr[1];


// function maxnum($array){
//   $max = $array[0];
// $n = count($array);
// for($i=1; $i<$n; $i++){
//   // echo $num[$i];
//   if($max < $array[$i]){
//     $max = $array[$i];
//   } 
//   if($max > $array[$i]){
//     $max = $array[$i];
//   }  
//     return $max; 
// }
// }
// $arr = [100, 4, 9, 25, 36];
// echo maxnum($arr);


//3)

// $squareRootArray = [1, 4, 9, 25, 36];


// for($i=1;$i<=5;$i++){
//   echo $i;
// }

// print_r($squareRootArray);


// echo "Hello";

$studata=[
    ["role"=> 1,"name"=>"akash", "skill"=>"php"],
    ["role"=>2,"name"=>"ajay", "skill"=>"python"],
    ["vidio"=>3,"name"=>"yesh", "skill"=>"js"],
];

// array_push($studata,'id');

foreach ($studata as $key => $value) {
  $data = $studata[$key]['id']=1;
  print_r($studata

);
  
  echo "<pre>";
 
}
?>

</body>
</html>