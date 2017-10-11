<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	echo "<br>";

  $replace = str_replace("-","/",$date);
  echo "replace: $replace<br>";

	if($replace>$tar){
		echo "the Future<br>";
	}
	elseif($date<$replace){
		echo "the Past<br>";
		}
	else{
		echo "Oops<br>";
		}

	$position =strpos($date,"-");
	$s = substr($date,$position+1);
	$positions = strpos($s,"-");
	$n = $position+$positions+1;
	echo "The position of / are: $position $n <br>";
	$len = str_word_count($date);
  $length = $len+1;
	echo "The number of words in the string are: $length <br>";
  $l = strlen($date);
  echo "The length of the string is: $l <br>";
  $a = ord($date);
  echo "7. The ascii value of first character of $date is: $a <br>";
  $lastnum = substr($date,-2);
  echo "The last two character of the date are: $lastnum <br>";
  $d = explode("-",$date);
  print_r($d);
    echo "<br>";
  echo "Leap years<br>";
  foreach($year as $v){
    if((($v % 4) == 0) && ((($v % 100) != 0) || (($v % 400) == 0))){
      echo "$v: True | ";
      }else{
      echo "$v: False | ";
      }
      }
?>
