<?php
#include_once '../config.php'

?>
<html>
<head><title>Uploading files</title></head>
<body>

    <form action="index.php?action=upload" method='POST' enctype='multipart/form-data'>
        <div>
            <input type="file" name="file">
            <input type="submit" value="Send file">
        </div>

    </form>

    <table border="1">
        <caption>Uploaded files</caption>
    <tr>
        <th>#</th>
        <th>File Name</th>
        <th>Size</th>
        <th>Command</th>
    </tr>
<?php
$files=$_SESSION['files'];
$i=1;
foreach($files as $file=>$size){
    print "<tr>";
    print "<td>".($i+1)."</td><td>".$file."</td><td>".$size."</td><td>"."<a href='index.php?action=remove&file=$file'>Delete</a>"."</td>";
    print "</tr>"; 
    $i++;
}

print_r($_FILES);
?>
</table>

</body>
</html>

