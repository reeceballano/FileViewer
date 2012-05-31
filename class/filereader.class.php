<?php
class Filereader {
	/*
	Author: Reece Ballano
	E-mail: trazhme@gmail.com
	Website: http://codernotes.pcriot.com
	*/
	
	/*
	@param $folder
	@param $loc
	*/
	public function reader($folder,$loc) {
		$file = glob($folder . '*.*');
		$iArray = array();
		foreach($file as $files) {
			//extension
			$extension = self::endArray(self::explodeArray('.', $files));
			
			//filename
			$filename = self::explodeArray('/', $files);
			
			//combine filename and extension
			$result = $filename[$loc] . " " . $extension;
			array_push($iArray, $result);
		}
		return $iArray;
	}
	
	public function explodeArray($delimiter, $iArray) {
		$iArray = explode($delimiter, $iArray);
		return $iArray;
	}
	
	public function endArray($iArray) {
		$i = end($iArray);
		return $i;
	}
	
	public function fileName($file) {
		switch ($file) {
			case 'php':
				return 'PHP FILE';
				break;
			
			case 'txt':
				return 'TEXT FILE';
				break;
				
			case 'jpg':
				return 'JPG FILE';
				break;

			case 'gif':
				return 'GIF FILE';
				break;	

			case 'css':
				return 'CSS FILE';
				break;	

			case 'js':
				return 'JAVASCRIPT FILE';
				break;				

		}
	}
	
	public function fileOpen($file) {
		if(filesize($file) != 0) {
			$fopen = fopen($file, 'r');
			return htmlspecialchars(fread($fopen, filesize($file)));
		} else {
			return false;
		}
	}
}
?>