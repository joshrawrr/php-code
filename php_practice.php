<!--Hello!
<h1>Hello!</h1>
<style>
    h1 {
        color: yellow;
    }
</style>
<script>
    alert("Hello!")
</script> -->
<?php
   /*
    echo "<b>Hello World!</b>";
    echo "<b>Hello World!</b>";
    echo "<b>Hello World!</b>";
    echo "<b>Hello World!</b>";
    echo "<b>Hello World!</b>";
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Hello this is Me!</h1> -->
    <?php
        // echo "Hello!";
       
        // $color = "Red";
        // $Color = "Blue";
        // echo $Color;
        // echo $color;

        // $_ = 5;
        // echo $_;

        // var_dump($color);
        // var_dump($_);
        // var_dump(3.0);
        // var_dump(true);
        // var_dump(false);
        // var_dump([1,2]);


        //variable
        // $x = 5; //global

        // function test (){
        //     // $x = 10; //local
        //     static $x = 10;
        //     echo $x;
        //     $x++;
        //     echo "<br>";
        // }

        // test();
        // test();
        // test();
        // test();
        // test();
        // test();
        // echo $x;

        // echo ("Hello"), ("Hello"), ("Hello");
        // echo "World!", "World!";
        // print ("Hello");
        // print "World!"

        // $x = print("Hello");

        // print $x;


        /*$a = (object) 'Jerry';
        $b = (object) 5;
        $c = (object) 4.5;
        $d = (object) true;
        $g = (object) null;
        $h = (object) fopen("php_practice.php", "r");



        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        echo "<br>";
        var_dump($g);
        echo "<br>";
        var_dump($h);
        echo "<br>";*/


        //unset($a);
       // echo $a;

        // // echo strlen($a);

        // $x = "Juan Cruz";
        // echo str_replace("Cruz", "Lance", $x);

        // echo trim("Hello");

        // var_dump(explode("u", $x));

        // echo "Hello World";
        // echo "<br>";

        // $a = "Hello";
        // $b = "Love";

        // echo $a . " " . $b, "<br>";
        // echo "$a $b";

        // echo "Juan \$Immortal\" Enrile";

        // echo is_int(3), "<br>";

        // echo PHP_array_MAX;
        // echo PHP_array_MIN;

        // echo is_array(5.1);

        // echo is_double(10.23);

       /*$x=pi();
       echo $x;

      echo(min(0,150));
      echo(max(0,150,));

      echo abs(6);

      echo sqrt(2);

      echo round (5.5);

      echo rand(5,20);*/

      /*$_asd =5;
      define(constat_name:"GREETING!",value"Hello");
        echo GREETING;
      function test(): void{
        //echo GREETING;
      };

      $_asd = 5;
      */

      //$x=5;

      //+=
      //$x=$x+10;
      //$x + 10;
     // echo $x;

     // $x %= 5;
     // echo $x;

    //  var_dump(5==5);//true
    //  var_dump("5"==="5");//true
    //  var_dump(5 <> 7);//true
    //  var_dump(5 !== "5");//true

    //echo 3 <=> 2;

    //increment
    //++
    //pre-increment/decrement
    // $x =  5;
    // echo ++$x;
    // //post-increment/decrement

    // $y + 5;
    // echo $y++;
    // echo $y;

    //logical
    //and &&

    // var_dump(true && true);//both true
    // var_dump(5==="5" && 5===5);//both true

    // // or ||

    // var_dump(true || true);//atlest one is true

    // // xor
    // var_dump(true xor false);//only one true

    // // ! reverse
    // var_dump(!true);

    //.
//     $x="Hello";
//     // .= append

//    // $x .= "world!"
//     echo $x;

// $x=[1,2,3];
// $y=[3=>4,5,6,7];

// $z=$x+$y;

// // print_r($x);
// // print_r($y);
// print_r($z);



//equal
// $x=[1,2,3];
// $y=[2=>3,1=>2,0=>1];

// echo $x == $y;//true

// //identical
// $x=[1,2,3];
// $y=[2=>3,1=>2,0=>1];

// echo $x === $y;//false
       

//decision making statements
//iff statement

// if(4=="4h")
//     echo "same";
// elseif(6>5)
//     echo"4 is greater than 5";
// else
//     echo "no";

// $gender=null;
// if($gender=="female"){echo"woman";}else{echo "mens";}
// //condition ? if true : if false;
// echo $gender == "female" ? "Woman": "Mens";

//ternary
// $x= $gender == "female" ? "Woman": "Mens";
// echo $x;

// $x=$gender ?? null;
// echo $x;

//switch

// $color = "R";
//     switch($color){
//         case "R":
//             echo "Red";
//                 break;
//         case "G":
//             echo "Green";
//                 break;

//         case "B":
//             echo "Blue";
//                 break;
//         default:
//         echo "Invalid";

//     }
    // //true and true
    // if(4=="4" && 4 == 4){}

    // //atleast 1 true
    // if(4=="4" || 4 == 4){}

    // //only 1 true,cannot be both
    // if(4=="4" XOR 4 == 4){}

    // //reverse
    // echo !4=="4";

//php looping statement

//while
//  $x=0;
//     while($x < 5){
//         echo "Hello";
//         continue;
//         $x++;
//     }
//do while
// do{
//      if($x==3){
//         continue;
//     }
//     echo $x;
//     $x++;
   
// }while($x < 5)
//for
// for($x = 0;$x<5;$x++){
//     echo $x;
// }
//foreach

// $x = array(1,2,3,4);

//     foreach($x as $key => $value){
//         echo $key."->".$value,"<br>";
//     }
?>

 
<ol>
   
<!-- <?php for($x = 1;$x <=20;$x++){ ?>
        <li>Item<?php echo$x;?></li><?php
   
    } ?> -->
   
    <?php
    $x = array("Maria", "Therese","Juana");
        foreach($x as $value){
            echo "<li>$value</li>"
        }
    ?>
   
</ol>

</body>
</html>
