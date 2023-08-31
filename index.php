<?php
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
