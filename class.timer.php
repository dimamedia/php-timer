<?php

class timer {
	private $starttime;
	private $stoptime;
	public $data;

	function __construct() {
		$mtime = microtime(); 
		$mtime = explode(" ",$mtime); 
		$mtime = $mtime[1] + $mtime[0]; 
		$this->starttime = $mtime; 
	}
		
	function now($title = null, $type = null) {
		$mtime = microtime(); 
		$mtime = explode(" ",$mtime); 
		$mtime = $mtime[1] + $mtime[0]; 
		$this->stoptime = $mtime; 

		$totaltime = ($this->stoptime - $this->starttime); 
		if($type == "min") $time = round(($totaltime/60), 2)." min";
		else $time = round($totaltime, 3)." sec";
		
		if($title) $this->data[$title] = $time;
		return $time;
	}

	function last($type = null) {
		$totaltime = ($this->stoptime - $this->starttime); 
		if($val == "min") return round(($totaltime/60), 2);
		else return round($totaltime, 3);
	}
}

?>
