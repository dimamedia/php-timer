<?php

class timer {
	private $starttime;
	private $stoptime;

	function __construct() {
		$mtime = microtime(); 
		$mtime = explode(" ",$mtime); 
		$mtime = $mtime[1] + $mtime[0]; 
		$this->starttime = $mtime; 
	}
		
	function stop() {
	   $mtime = microtime(); 
		$mtime = explode(" ",$mtime); 
		$mtime = $mtime[1] + $mtime[0]; 
		$this->stoptime = $mtime; 
	}

	function getTime($val = null) {
		$this->stop();
		$totaltime = ($this->stoptime - $this->starttime); 
		if($val == "min") return round(($totaltime/60), 2);
		else return round($totaltime, 3);
	}

	function getLast($val = null) {
		$totaltime = ($this->stoptime - $this->starttime); 
		if($val == "min") return round(($totaltime/60), 2);
		else return round($totaltime, 3);
	}
}

?>
