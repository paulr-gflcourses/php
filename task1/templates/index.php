<html>
<head><title><?php echo TITLE; ?></title>
    <style type="text/css">
        .errors{
        color: #FF0000; 
        font-size: 15px;
}
    </style
</head>
<body>
	<h2>File uploading</h2>
    <form action="index.php?action=upload" method='POST' enctype='multipart/form-data'>
        <div>
            <input type="file" name="file">
            <input type="submit" value="Send file">
        </div>

    </form>


	
<?php

if ($files)
{
?>
	
	 <table border="1">
        <caption>Uploaded files</caption>
    <tr>
        <th>#</th>
        <th>File Name</th>
        <th>Size</th>
        <th>Command</th>
    </tr>
	
	<?php
	$i=1;
foreach($files as $file=>$size)
{
    print "<tr>";
    print "<td>".($i+1)."</td><td>".$file."</td><td>".$size."</td><td>"."<a href='index.php?action=remove&file=$file'>Delete</a>"."</td>";
    print "</tr>"; 
    $i++;
}
echo "</table>";
}else
{
	print "<h3>No files uploaded!</h3>";
}

if ($errorUpload)
{
echo "<p class='errors'>Error: ".$errorUpload."</p>";
}

if ($errorRemove)
{
echo "<p class='errors'>Error: ".$errorRemove."</p>";
}

if ($errorFileNotFound)
{
echo "<p class='errors'>Error: ".$errorFileNotFound."</p>";
}
?>


</body>
</html>

