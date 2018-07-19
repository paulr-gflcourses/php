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
    if (file_exists(FILE_DIR.$filename))
    {
        return ERR_FILE_EXISTS;
    }
    if (is_writable(FILE_DIR))
    {
        if (!move_uploaded_file($file['tmp_name'],  FILE_DIR.$filename))
        {
            return ERR_UPLOADING;
        }
    }else
        {
            return ERR_WRITING_NOT_ALLOWED;
        }
    return '';
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
    if (file_exists(FILE_DIR.$filename))
    {
        if (is_writable(FILE_DIR)&&(!unlink(FILE_DIR.$filename)))
        {
            return ERR_REMOVING;
        }
    }else 
        {
            return ERR_FILE_NOT_FOUND;
        }

    return '';
}

?>
