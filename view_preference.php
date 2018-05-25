<style type="text/css">
		.pga {width: 100%;}
		body{background-color: lightgrey;}
		.view_preference { display:table; width:30%;background-color: #edf9f3;margin:auto;padding-top: 20px;}
</style>
<body style="margin: 0px; font-family: sans-serif;">
<div class = "pga">
<?php
include 'init.php';
if(!logged_in())
{
	header('Location: index.php');
	exit();
}
include 'template/header.php';

?>
<div class="view_preference">
<ul>
<li>Looking for&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo retrieve_data('looking','preference');?></li>
<li>Aged&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo retrieve_data('agefrom','preference');?> to <?php echo retrieve_data('ageto','preference');?> yrs</li>
<li>Height&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo retrieve_data('height_from','preference');?> cm to <?php echo retrieve_data('height_to','preference');?> cm</li>
<li>Marital Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo retrieve_data('marital_status','preference');?></li>
<li>Religion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo retrieve_data('religion','preference');?></li>
<li>Mother Tongue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo retrieve_data('mother_tongue','preference');?></li>
<li>State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo retrieve_data('state','preference');?></li>
<li>Education&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo retrieve_data('education','preference');?></li>
<li>Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo retrieve_data('course','preference');?></li>
<li>Occupation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo retrieve_data('occupation','preference');?></li>
<li>Annual Income&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo retrieve_data('income','preference');?></li>
</ul>
</div>
<?php
include 'template/footer.php';
?>
</div>
</body>