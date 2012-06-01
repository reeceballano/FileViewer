<html>
<head>
	<title>File Viewer</title>
	<style type="text/css">
		#wrapper, #footer {
			width: 980px;
			border-top: 5px solid #484500;
			margin: 0 auto;
			min-height: 100px;
			padding-top: 10px;
		}
		
		#footer {
			font-size: 9px;
		}
		
		#footer a {
			text-decoration: none;
			color: #329ADC;
		}
	</style>
</head>
<body>
	
	<div id="wrapper">
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
			echo $list . " => " . $fileex . '<br>';
			echo '<textarea>' . $file . '</textarea>' . '<hr>';
		}
		?>
	</div><!-- end wrapper -->

	<div id="footer">
		<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Dataset" property="dct:title" rel="dct:type">File Viewer</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://codernotes.pcriot.com" property="cc:attributionName" rel="cc:attributionURL">Reece Ballano File Viewer</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://codernotes.pcriot.com" rel="dct:source">codernotes.pcriot.com</a>.<br />Permissions beyond the scope of this license may be available at <a xmlns:cc="http://creativecommons.org/ns#" href="http://codernotes.pcriot.com" rel="cc:morePermissions">http://codernotes.pcriot.com</a>.
	</div><!-- end footer -->
</body>
</html>