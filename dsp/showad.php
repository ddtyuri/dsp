<?php 
$search = $_COOKIE["search"];
//echo $search; 
switch ($search)
{
case "study":
	$img = 'study.gif';
	echo '<img src="'.$img.'" alt="图片" />';
  //echo "study hard plz~";
  break;
case "domain":
	$img = 'domain.gif';
	echo '<img src="'.$img.'" alt="图片" />';
  //echo "buy domain plz~";
  break;
case 3:
  echo "Number 3";
  break;
default:
  echo "并没有cookie";
}


?>