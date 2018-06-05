<?php

function getFileSize($fsize){
    $sizeKb=10;#intdiv($fsize,1024);
    return "$sizeKb kB";
}

function upload(){
    print "UPLOAD";


    $file=$_FILES['file'];
    $filename=$file['name'];
    $fsize=getFileSize($file['size']);
    echo "\n---fname=".FILE_DIR.$filename.", size = $fsize";
    echo "\n--files: ";

    if (move_uploaded_file($file['tmp_name'], __DIR__ . "/files/" . $filename)){
        $files=$_SESSION['files'];
        $files[] = [$filename,$fsize];
        print_r($files);
        $_SESSION['files']=$files;

    } else {
        echo "Uploading failed!";
    }
}



function listing(){
}


function remove(){
    echo "REMOVE!";
}

?>
