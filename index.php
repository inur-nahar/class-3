<?php
// function test($studentname,$math,$english,$bangla){
// $result = $math+$english+$bangla;
// echo "$studentname marks is $result";
// echo "<br>";
// }
// test("Inur",80,60,90);                             //1st function
// test("Razia",90,70,70);
// test("Dipa",60,60,80);

// echo "<br>";
// function add($a, $b) {
//     $result= $a + $b;
//     echo "sum result is $result ";                //2nd function
//     echo "<br>";             
// }
// add(5, 3); 
// add(15, 3); 
// echo "<br>";

// function subtract($a, $b) {
//     $result= $a - $b;
//     echo "subtract result is $result ";           //3rd function
//     echo "<br>";
// }
// subtract(10, 3); 
// subtract(80, 3);

// echo "<br>";

// function multiply($a, $b) {
//     $result=  $a * $b;
//     echo "multiply result is $result ";             //4th function
//     echo "<br>";
// }
// multiply(10,3);
// multiply(108,3);
// echo "<br>";
// echo "<br>";
// function divide($a, $b) {
//     $result=  $a / $b;
//     echo "divide result is $result ";                  //5th function
//     echo "<br>";
// }
// divide(10, 5);
// divide(60, 5);
// echo "<br>";
// function power($a, $b) {
//     $result=  $a ** $b;
//     echo "power result is $result ";                   //6th function
//     echo "<br>";
// }
// power(2, 3);
// power(3, 3);
// echo "<br>";
// function modulus($a, $b) {
//     $result=  $a % $b;
//     echo "modulus result is $result ";               //7th function
//     echo "<br>";
// }
// modulus(100, 3);
// echo "<br>";
// function uppercase($name){
//     echo("Uppercase text is"." ". strtoupper($name));
//     echo "<br>";
// }
// uppercase("Inur nahar");                               //8th function
// uppercase("Liya");
// echo "<br>";
// function lowercase($name){
//     echo("lowercase text is"." ". strtolower($name));
//     echo "<br>";
// }
// lowercase("Inur nahar");                              //9th function
// lowercase("Liya");


// echo "<br>";
// function address($name,$address) {
   
//     echo "Name is $name addres is $address ";             //10th function
//     echo "<br>";
// }
// address("liya", "Lakshmipur");
// address("Razia", "Noakhali");
// address("Dipa", "Feni");
// var_dump('inur nahar liya') ;

// echo "<h2>PHP is Fun!</h2>";
// echo "Hello world!<br>";
// echo "I'm about to learn PHP!<br>";
// echo "This ",  "was ", "made ", "with multiple parameters.<br>";
// echo "<i>PHP is Fun!</i>";

// $txt1 = "Learn PHP";
// $txt2 = "W3Schools.com";
// $x = 5;
// $y = 4;

// echo "<h1>" . $txt1 . "</h1>";
// echo "Study PHP at " . $txt2 . "<br>";
// echo $x + $y ."<br>";
// print "PHP IS FUN  <br>";
// $firstname = 'Inur Nahar';
// $lastname = 'Liya';


// echo $firstname .'  ' . $lastname; 
// printf( " My Name Is " );  

// printf("my name is %s", strtoupper ($lastname   )) ;



// $num1 =115 ;
// $num2 =2;
// $result =$num1 + $num2;
// echo $result ;

//assignment operator

 
// $a = 20;
// // $a = $a + 30;
// $a += 50;
// echo $a;


// $num = 24;
// echo ++$num . '<br>';
// $a=10;
// $b=20;
// $result= $a<$b;
// echo $result;
// if($a<$b){
// echo 'hello world';
// };
echo "<i><h3><u>Home Work(10 If-Else checking PHP Programme)</i></u> </h3> ";
// echo "<h4>10 If-Else checking PHP Programme  </h4> ";

//1st
echo "<b> 1st Programme </b><br> ";
if(5<6){
echo 'Hello Inur <br>';
}else{
  echo  "Bye.. Bye.. Inur <br>";
}
//2nd
echo "<b> 2nd Programme </b><br> ";
$t = date("H");

if ($t > "20") {
  echo "Have a good day!<br>";
} else {
  echo "Have a good night! <br>";
}
//3rd
echo "<b> 3rd Programme </b><br> ";
$a='20';
if($a==20){
echo 'How Are you <br>';
}else{
   echo 'Thank You...';
}
//4th
echo "<b> 4th Programme </b><br> ";
$age = 18;
if($age>=21){
echo "Eligible For DL";
}else{
    echo "Not Eligible for DL <br>";
}
//5th
echo "<b> 5th Programme </b><br> ";
$temperature = 20;
if($temperature>30){
echo "Its a Hot Day!";
}else {
    echo "It's a joyful Day...";
}
echo '<br>';
//6th
echo "<b> 6th Programme </b><br> ";
$score = 75;
if($score<=100 && $score>=100){
echo 'Grade = A+';
}
elseif($score>=70 && $score<80){
    echo 'Grade = A';
    }
    elseif($score>=60 && $score<70){
        echo 'Grade = A-';
        }
        elseif($score>=50 && $score<60){
            echo 'Grade = B';
            }
            elseif($score>=40 && $score<50){
                echo 'Grade = C';
                }
            elseif($score>=33 && $score<40){
                echo 'Grade = D';
                }
                elseif($score>=0 && $score<33){
                    echo 'FAIL';
                    }else{
                        echo 'Invalid';
                    }echo '<br>';
                    //7th
                    echo "<b> 7th Programme </b><br> ";
$phone = 'ehfdfnndn';
                               // var_dump(is_numeric($phone)) ;
if(is_numeric($phone)){
echo "Valid Number";
}else{
    echo "Invalid Number";
}echo '<br>';

$text = 6347384;
                               //ctype_alpha() ;
if(ctype_alpha($text)){         //is_bool()
echo "Valid Text";
}else{
    echo "Invalid Text";
}echo '<br>';

 //8th
 echo "<b> 8th Programme </b><br> ";
 $x = 10.365;
 var_dump(is_float($x));echo '<br>';
 $x = "hello";
 var_dump(is_float($x));
 echo '<br>';
//9th
echo "<b> 9th Programme </b><br> ";
$year = 2024;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo $year . " is a leap year.";
} else {
    echo $year . " is not a leap year.";
}echo '<br>';
//10th
echo "<b> 10th Programme </b><br> ";
$num1 = 25;
$num2 = 30;

if ($num1 > $num2) {
    echo "num1 is greater.";
} elseif ($num2 > $num1) {
    echo "num2 is greater.";
} else {
    echo "Both numbers are equal.";
}