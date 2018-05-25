<style type="text/css">
		.pga { width: 100%; margin:0;}
		/*.img img{margin:0;}*/
		body {background-color: lightgrey;}
		.image li{display:inline;
			 padding-right:20px; }

</style>
<body style=" margin: 0px;">
<div class = "pga">
<?php

include 'init.php';
include 'template/header.php';
if(logged_in())
{
	echo 'Welcome , you can now start to <a href="create_album.php">create albums</a> and <a href="upload_image.php">upload images</a>';
}
else
{
//echo '<img src="images/landing.png" alt="Register a free acount today" />';
}
?>

<!div class="img" >
        <!img src ="images/couple.jpg" style="width:97.5%;">
<!/div>

<?php
include 'template/footer.php';
?>
</div>
</body>