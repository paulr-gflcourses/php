<?php
class FileManipulator{
	
	
	private $file;
	
	function __construct($file)
	{
		$this->file = $file;
	}
	
function getStringFromFile($snum)
{
    return $this->file[$snum];
}


function getCharFromFile($snum, $cnum)
{
    $line = $this->getStringFromFile($snum);
	return $line[$cnum];
}

function changeStringFromFile($snum, $line)
{
    $this->file[$snum]=$line."\n";
}

function changeCharFromFile($snum, $cnum, $char)
{
	$this->file[$snum][$cnum] = $char;
}

function saveFile()
{
    file_put_contents(FNAME_CHANGED, $this->file);
}

}
?>
