
<style>
.free {margin: auto; text-align: center;}
.btn-group .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    float: left;
}

.btn-group .button:hover {
    background-color: #3e8e41;
}
</style>
<div class="free" style="margin: auto; padding-left:250px;">
<div class="btn-group">
<a href="index.php" style="color:black;text-decoration:none"><button class="button">HOME</button></a>
</div>
<?php
if(!logged_in())
{
?>
<div class="btn-group">

<a href="register.php" style="color:black;text-decoration:none"><button class="button">REGISTER</button></a>
<a href="login.php" style="color:black;text-decoration:none"><button class="button">LOG IN</button></a><br><br>
</div>
<?php
}
else
{
?>
<?php
if(!added_details())
{
?>
<div class="btn-group">
<a href="details.php" style="color:black;text-decoration:none"><button class="button">ADD DETAILS</button></a>
</div>
<?php
}
else
{
?>
<div class="btn-group">
<a href="view_details.php" style="color:#FFF;text-decoration:none"><button class="button">VIEW DETAILS</button></a>
</div>
<?php
}
if(!added_preference())
{
?>
<div class="btn-group">
<a href="preference.php" style="color:#FFF;text-decoration:none"><button class="button">ADD PREFERENCE</button></a>
</div>
<?php
}
else
{
?>
<div class="btn-group">
<a href="view_preference.php" style="color:#FFF;text-decoration:none"><button class="button">VIEW PREFERENCE</button></a>
<a href="pre_result.php" style="color:#FFF;text-decoration:none"><button class="button">view PREFERENCE result</button></a>
</div>
<?php
}
?>
<div class="btn-group">
<a href="logout.php" style="color:#FFF;text-decoration:none"><button class="button">LOG OUT</button></a><br><br>
</div>
<?php

}
?>
</div>