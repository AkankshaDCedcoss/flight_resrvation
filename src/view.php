<?php
session_start();
// session_destroy();

if(!isset($_SESSION['reservation']))
{
    $_SESSION['reservation']=array();
}


if($_POST['action']=='add')
{
$title=$_POST['title'];
$fname=$_POST['fname'];

$lname=$_POST['lname'];

$month=$_POST['month'];

$day=$_POST['day'];

$year=$_POST['year'];

$reserv=array($title,$fname,$lname,$month,$day,$year);
array_push($_SESSION['reservation'],$reserv);

echo json_encode($_SESSION['reservation']);


}






if($_POST['action']=='edit')

{
    $index=$_POST['index'];
$title1=$_POST['key1'];
$fname1=$_POST['key2'];

$lname1=$_POST['key3'];

$month1=$_POST['key4'];

$day1=$_POST['key5'];

$year1=$_POST['key6'];

$reserv1=array($title1,$fname1,$lname1,$month1,$day1,$year1);

for($i=0;$i <count($_SESSION['reservation']);$i++)
{

    foreach($_SESSION['reservation'] as $value)
    {
if($index == $i)
{

    $_SESSION['reservation'][$i][0]=$title1;
    $_SESSION['reservation'][$i][1]=$fname1;
    $_SESSION['reservation'][$i][2]=$lname1;
    $_SESSION['reservation'][$i][3]=$month1;
    $_SESSION['reservation'][$i][4]=$day1;
    $_SESSION['reservation'][$i][5]=$year1;






    // array_splice($_SESSION['reservation'],$i,1,$reserv1);
}


}

}


echo json_encode($_SESSION['reservation']);


}



if($_POST['action']=='delet')

{
   $index2=$_POST['index2'];
for($i=0;$i <count($_SESSION['reservation']);$i++)
{
if($index2 == $i)
{
    array_splice($_SESSION['reservation'],$i,1);
}


}




echo json_encode($_SESSION['reservation']);
// echo json_encode('hiiiiiiiiiiiiiii');


}
