<?php 

//1.
// $m = mktime (0, 0, 0, 11, 4, 1981);
// $m1 = mktime(0, 0, 0, 9, 4, 2023);
// $month = date ("n", $m);
// $month2 = date ("n", $m1);
// $day = date ("j", $m);
// $day1 = date ("j", $m1);

// $allMonths = 12 . " months, ";
// $allDays = 31;
// $initialDateMonths = 0 . " months, ";
// $initialDateDays = 0 . " days ";
// $totalYear = abs (date ("Y", $m) - date ("Y", $m1)) . " years, " ;
// if ($month > $month2 && $day == $day1){
//     echo (int)$totalYear - 1 . " years, ";
//     echo (int)$allMonths - $month + $month2  . " months, ";
//     echo $initialDateDays;
// }else if ($month < $month2 && $day == $day1){//
//     echo $totalYear;
//     echo (int)abs($month - $month2 ) . " months, "; 
//     echo $initialDateDays;
// }else if ($day > $day1 && $month == $month2 ){//
//     echo (int)$totalYear - 1 . " years, ";
//     echo (int)$allMonths - $month + $month2 - 1 . " months, ";
//     echo (int)$allDays - $day + $day1 . " days, ";
// }else if ($day < $day1){
//     echo (int)$totalYear - 1 . " years, ";
//    echo (int)$allMonths - $month + $month2 . " months, ";
//     echo (int)abs($day - $day1 ) . " days, "; 
// }else if ($month > $month2) {
//     if ($month > $month2) {
//     echo (int)$totalYear - 1 . " years, ";
//     echo (int)$allMonths - $month + $month2 - 1 . " months, ";
//     echo (int)$allDays - $day + $day1 . " days, ";
//     }else {
//     echo(int)$allMonths - 1 . " months, ";
//     echo (int)$totalYear - 1 . " years, ";
//     echo (int)abs($month - --$month2 ) . " months, ";   
//     echo (int)$allDays - $day + $day1 . " days, ";
//     }
  
// }else if ($month < $month2){
//     echo (int)$totalYear . " years, ";
//     echo (int)$allDays - $day + $day1 . " days, ";
//     if ($day > $day1){
//         echo $initialDateMonths;
//     }else {
//         echo (int)$allMonths - $month + $month2 - 1 . " months, ";
//     }
// }else {
//     echo (int)$totalYear - 1 . " years, ";
//     echo $initialDateMonths;
//     echo $initialDateDays;
// }


//2.

// $myFile = fopen ("./one/t1.txt", "r") or die ("eror");
// for ($i = 1; $i <= 5; $i++){
//     fgets ($myFile);
// }
// echo fgets ($myFile);
// fclose ($myFile);


//2.1

// $myFile = "./one/index.html";
// $filePath = file_get_contents($myFile);
// $deleteContents = preg_replace('/<b>(.*?)<\/b>/s', '', $filePath);
// $newFile = "./one/modified.html";
// file_put_contents($newFile, $deleteContents);
// echo $deleteContents;


?>




