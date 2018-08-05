
	$query="SELECT * FROM LOGIN";
	$result=mysqli_query($connection,$query);
	if(!$result)
	{
		die("query failed".mysqli_error());
	}
	



?>
    <!doctype html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link href="bootstrap.min.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    <?php
	
    while($row=mysqli_fetch_assoc($result)){
		?>
        <pre>
        <?php
	print_r($row);	
		?>
        </pre>
	<?php }
    
    
    
    ?>
    </body>
    </html>