<?php

function upload(){
    print "UPLOAD";


    $file=$_FILES['file'];
    $filename=$file['name'];
    echo "\n---fname=".$filename;
    print "\n--files: ";
    
    if (move_uploaded_file($filename, FILE_DIR."/".$filename)){
        echo "Файл корректен и был успешно загружен.\n";
    } else {
            echo "Возможная атака с помощью файловой загрузки!\n";
    }

    $files=$_SESSION['files'];
    $files[] = [$file['name'],$file['size']];
    print_r($files);
    $_SESSION['files']=$files;
}

function listing(){
}

function getFileSize(){
}

function remove(){
    echo "REMOVE!";
}

?>
