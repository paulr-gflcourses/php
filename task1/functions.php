<?php

function getFileSize($fname)
{
    $size=ceil(filesize($fname)/1024);
    return "$size kB";
}

function upload()
{
	
    $file=$_FILES['file'];
    $filename=$file['name'];
	chmod(FILE_DIR,0777);
    if (!move_uploaded_file($file['tmp_name'],  FILE_DIR.$filename))
	{
        $errorUploading = true;
    }
	
}



function listing()
{
	$allFiles = scandir(FILE_DIR);
	$files = array();
	foreach($allFiles as $file)
	{
		if (is_dir($file))
		{
			unset($allFiles[$file]);
		}else
		{
			$files[$file] = getFileSize(FILE_DIR.$file);
		}
	}
	return $files;
}


function remove($filename){  
	chmod(FILE_DIR,0777);
	if (file_exists(FILE_DIR.$filename))
	{
		 if (!unlink(FILE_DIR.$filename))
		 {
			$errorRemoving = true;
		 }
	}else 
	{
		$errorFileNotFound = true;
	}

}

?>
