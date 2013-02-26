<?php
/**
 * Show array values
 * 
 * @param array a mostrar $array
 * @return boolean
 */
function muestraArray($array){
	foreach ($array as $key => $value)
	{
		echo $key.": ".$value;
		if(is_array($value)){
			echo " = ";
			//muestraArray($value);
			echo implode(",", $value);
		}
		echo "<br />";
	}
	return TRUE;

}

/**
 * 
 * 
 */
function cambiarArray($array){
	$array2 = array();
	foreach ($array as $key => $value)
	{
		//echo $key.": ";
		if(is_array($value)){
			$array2[] = implode(',', $value);
		}
		else 
			$array2[] = $value;
			
	}
	return $array2;

}


function getDestinationFileName($destination){
	$candidate = $destination;
	$path_info = pathinfo($destination);
	$idx = 0;
	while(file_exists($candidate)){
		$idx++;
		
		$candidate = $path_info['dirname']."/".$path_info['filename']."-".$idx.".".$path_info['extension'];
		
		//echo $candidate;
	}
	
	return $candidate;
}