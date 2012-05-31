<?php
/*
Author: Reece Ballano
E-mail: trazhme@gmail.com
Website: http://codernotes.pcriot.com
*/

include('autoload.php');

$filereader = new Filereader();

/*folder location*/
$folder = 'files/';

/*
1st parameter folder location
2nd parameter e.g. "../class/" set the 2nd parameter to "2",
*/
$files = $filereader->reader($folder,1);

foreach($files as $list) {
	$fileex = $filereader->explodeArray(' ', $list);
	$fileex = $filereader->fileName($fileex[1]);
	
	$fname = explode(' ',$list);
	$file = $filereader->fileOpen($folder . $fname[0]);
	echo $list . '</a>' . " => " . $fileex . '<br>';
	echo '<textarea>' . $file . '</textarea>' . '<hr>';
}


?>