<?php
	require_once 'config.php';
		$country=$_POST['country'];
		$region=$_POST['region'];
		$result = $_POST['latlon'][0];
		
		$result=str_replace(array( '(', ')' ), ' ', $result);
		
		
		$result=str_replace(', ',',',$result);
		$result = trim($result);
		$result=str_replace('  ',' ',$result);
		
		/*$result = str_replace('  ','
		',$result);*/
			
			
		$firstdata = substr($result,0,strpos($result,' '));
		
		$all_latlon=$result.' '.$firstdata;
	
	
	
	
	
	
	//$latlong=$_POST['latlon'];
	
	
	//$latlong=str_replace(array( '(', ')' ), ' ', $latlong);
	//$latlong=explode("-",$latlong);
	//print_r($latlong);
	//die($latlong);
	
	
	$sql="insert into map_detail(country,region,latitude_longitude)values('$country','$region','$all_latlon')";
	$result=mysql_query($sql);
	
if($result)
{
header("location:index.php");
}
else
{
echo"ERROR";
}

mysql_close();

?>
