<?php 
	include 'config.php';
	$db=mysql_connect($namehost, $userhost, $passwordhost);
	$InfoPhone['rez'] = "ошибке в начале"; 
	if(!$db){
		$InfoPhone['rez'] = "не получилось соединиться";
	}
	else{
			mysql_select_db("$selectbaza");
			$query = "SELECT * FROM price";
			$result = mysql_query($query);
			//$phones=mysql_fetch_row($result);
			$i=0;
			while ($phones=mysql_fetch_array($result)) {
			 	$i++;
			 	$InfoPhone['id'][$i]=$phones['id'];
			 	$InfoPhone['price'][$i]=$phones['price'];
			 	$InfoPhone['name'][$i]=$phones['name'];
			 	$InfoPhone['count']=$i;
	
			 }
	}

 echo json_encode($InfoPhone);
 
 ?>
 