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
        foreach($files as $i=>$file){
            print "<tr>";
            print "<td>".($i+1)."</td><td>".$file[0]."</td><td>".$file[1]."</td><td>"."<a href='index.php?action=remove'>Delete</a>"."</td>";
           print "</tr>"; 
        }

        print_r($_FILES);
/*
        foreach($_FILES as $file){
            print "<tr>";
            print "<td></td><td>".$file['name']."</td><td></td><td></td>";
            print "</tr>";
        }
        print_r($_FILES);
 */
    ?>
</table>

</body>
</html>

