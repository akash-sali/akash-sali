    <?php


    // ye function array ki lenght ko count karke dega 

    // second type 

    //     $food =array(
    //     'fruit'=>array('orange', 'banana', 'apple'),
    //     'veggle'=>array('carrot', 'cpllar', 'pea')
    // );
    // echo count($food['fruit']);
    // ******************************************
    // third type

    // $food =array('orange', 'banana', 'apple');

    // $len = count($food);

    // for($i = 0; $i<$len; $i++ ){
    //     echo$food[$i] ."<br>";
    // }

    // ***************************************
    // forth type

    //  array search function 

    // <?php 

    // in_array()function ye function true false ki trah kam karega yadi value true ho to 1 print hoga nahi to false  ho to 0 yani kuch nahi prit karega

    // first-example 
    // $food = array('oranges', 'banana', 'apple');
    // echo in_array('oranges',$food);

    // seconsd example 
    // ********************************

    // first-example 
    //  $food =array('orange', 'banana', '55','apple');

    // if(in_array(55,$food,false)){
    //     echo "Find Successfullay.";
    // }
    // else{
    //     echo "can't Find.";
    // }
    // *********************************
    // multidimesion-array 

    // $a = array(array('p','r'),array('p','k'));

    // if((array('p','r').$a)){
    //     echo "Find Successfullay.";

    // }
    // else{
    //     echo "can't Find.";
    // }
    // ***************************************

    // array_search( )

    // $food =array('orange', 'banana', '55','apple');
    // echo array_search('apple',$food);

    // ***************************************

    // associates array example in search function 
    // 

    ?>

    <?php

    // ye function array ki value ko replace kar ke dega 

    // first-example 

    // $fruit = ['orange','banana','apple','graps'];
    // $veggie =['carrot','pea'];

    // $newArray = array_replace($fruit,$veggie);
    // echo "<pre>";
    // print_r($newArray);
    // echo "</pre>";

    // second-example

    // $fruit = ['orange','banana','apple','graps'];
    // $veggie =['carrot','pea'];
    // $color =['red','green',"blue"];

    // $newArray = array_replace($fruit,$veggie,$color);
    // echo "<pre>";
    // print_r($newArray);
    // echo "</pre>";



    // Third-example 


    // $fruit = ['orange','banana','a'=>'apple','graps'];
    // $veggie =['a'=>'carrot',1=>'pea'];

    // $newArray = array_replace($fruit,$veggie);
    // echo "<pre>";
    // print_r($newArray);
    // echo "</pre>";
    // *****************************************

    // forth example 
    // $array1 =array("a"=>array("red"),"b"=>array("green","pink"));
    // $array2 = array("a"=>array("yellow"),"b"=>array("black"));
    // $newArray = array_replace_recursive($array1,$array2);

    // echo "<pre>";
    // print_r($newArray); 
    // echo "</pre>"; 


    ?>
