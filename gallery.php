<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/style0.css">
</head>
<body>
	<?php include 'design/navbar.php' ?>
	<p class="br"></p>
	<center>
		<?php
	    $dir ="images/gallery/"; // image folder name
	      if (is_dir($dir)){
	         if ($dh = opendir($dir)){
	                 while (($file = readdir($dh)) !== false){
	                    if($file=="." OR $file==".."){} else { 
	              ?>   <!---- its a loop [change the folder name on img path]----->                
	                         <img  style="width: 260px;" src="images/gallery/<?php echo $file; ?>"> 
	             <?php
	              }
	             }
	         closedir($dh);
	         }
	      } ?>
    </center>
   	<p class="br">
   	<center>
   		<a href="design/admin.php/" class="btn"> Go to Admin Panel</a>
    </center>
    <p class="br"></p>
    <?php include 'design/footer.php' ?>
</body>
</html>