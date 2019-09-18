<?php

function _readCounter($Filename){
	$fp = fopen($Filename,"r");
	return fread($fp,9999);
	fclose($fp);
}

function _writeCount($Filename, $count){
	$fp = fopen($Filename,"w");
	fwrite($fp,$count);
	fclose($fp);
}

IF(!isset($_COOKIE["HIT-COUNTER"])){
	$lzfile = "counter.txt";
	
	//Check if counter file is found
	if(!file_exists($lzfile)){
		//Create count file starting at zero
		_writeCount($lzfile,0);
	}
	//Add one to the coounter value.
	$counter = _readCounter($lzfile) + 1;
	//Write back the new count value to the file.
	_writeCount($lzfile,$counter);
	//Set cokkie for unique vistors.
	setcookie("HIT-COUNTER",true);
}else{
	//Show the current counter value.
	$lzfile = "counter.txt";
	$counter = _readCounter($lzfile);
}

?>