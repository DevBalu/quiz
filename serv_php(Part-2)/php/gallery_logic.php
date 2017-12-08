<?php

function list_dirs($dir) {
	$result = [];

	$cdir = scandir($dir); 
	//loop the array
	foreach ($cdir as $key => $value){
		// exclude  (.) and (..)
		if (!in_array($value,[".",".."])){
			//we check if $value is directory. If it is directory we save list of files and directories of the specified path in array separately within array $result 
			if (is_dir($dir . DIRECTORY_SEPARATOR . $value)){
				// save the name of directory as key in result-array and as value we call function list_dir with another parameters (path) what we get from loop from $value. 
				$result[$value] = list_dirs($dir . DIRECTORY_SEPARATOR . $value); 
			}
			// else is not directory we simple save value in arr $result
			else{
				$result[] = $value; 
			}
		}
	}

	return $result; 
}

// we collect the link
$link = $_SERVER['DOCUMENT_ROOT']. $_SERVER['SCRIPT_NAME'];
$source = substr($link, 0, strlen($link) -11);
// get needed array with names of directives which in the future will be titles of galleries
$needed_arr = list_dirs($source . 'images/gallery');

if (!empty($needed_arr)) {
	$menu = array_keys($needed_arr);

	if (empty($_GET['df'])) {
		header("Location: gallery.php?df=" . $menu[0]);
	} else if ($_GET['df'] && !in_array($_GET['df'], $menu) ){
		header("Location: gallery.php?df=" . $menu[0]);
	}

	// if all is okey
	if (in_array($_GET['df'], $menu)) {
		// arr with thumbs
		$thumbs = $needed_arr[$_GET['df']]["thumbs"];
		//fullsize
		$fullsize = $needed_arr[$_GET['df']];
	}else {
		print $_GET['df'] . 'not be found in this directories';
	}


}else {
	print "Check please address to directories!";
}

// print '<pre>';
// var_dump($needed_arr[$_GET['df']]);
// print '</pre>';