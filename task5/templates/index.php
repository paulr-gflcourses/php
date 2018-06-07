<?php
include_once "config.php";


?>
<html>
<head><title><?php echo TITLE ?></title></head>
<body>

<h2>Cookies data</h2>
<p>Saving (<?php echo $key.", ".$val; ?>) </p>
<p>Getting: <?php echo $getCookie ?> </p>
<p>Removing (<?php echo $key.", ".$val; ?>)

<h2>Session data</h2>
<p>Saving (<?php echo $key.", ".$val; ?>) </p>
<p>Getting: <?php echo $getSession ?> </p>
<p>Removing (<?php echo $key.", ".$val; ?>)

<h2>MySQL data</h2>
<p>Saving (<?php echo $key.", ".$val; ?>) </p>
<p>Getting: <?php print_r($getMySQL); ?> </p>
<p>Getting: <?php echo $getMySQL; ?> </p>
<p>Removing (<?php echo $key.", ".$val; ?>)
</body>
</body>
</html>
