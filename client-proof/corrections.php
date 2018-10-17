<?php
//grab vars
$f = $_POST['front'];
$b = $_POST['back'];
$j = $_POST['job'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MarkIT Media - Print Proof Form</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
</head>

<body>
<div id="wrapper">
	<div id="main">
    	<div id="logo">
        	<img src="images/logo.png" width="739" height="149" border="0" />
        </div>
        <div class="contentWrapper">
        	<h1>Job: <?php echo $j; ?></h1>
            <p>Please describe the issues with the print job below.  Please be specific as possible so that we can correct all issues regaurding the job.</p>
            <form action="email_function2.php" method="post" >
            <input type="hidden" name="job" value="<?php echo $j; ?>" />
            <input type="hidden" name="front" value="<?php echo $f; ?>" />
            <?php if (!$b) { ?>
                <input type="hidden" name="back" value="blank.jpg" />
            <?php } else { ?>
                <input type="hidden" name="back" value="<?php echo $b; ?>" />
            <?php } ?>
            <p>Comments:</p>
            <textarea class="comment" name="comment"></textarea>
        </div>
        <div class="contentWrapper">
        	<div id="proof1">
            	<p>Front</p>
                <a href="Client_Proof/<?php echo $f; ?>" target="_blank"><img src="Client_Proof/<?php echo $f; ?>" width="334" height="209" border="0" /></a>
                <p class="small">click to enlarge</p>
            </div>
            <div id="proof2">
            	<p>Back</p>
                <a href="Client_Proof/<?php echo $b; ?>" target="_blank"><img src="Client_Proof/<?php echo $b; ?>" width="334" height="209" border="0" /></a>
                <p class="small">click to enlarge</p>
            </div>
            <div class="clear"></div>
        </div>
        <p align="center" style="padding-bottom:20px;" >
        <input type="submit" style="cursor:pointer;" class="buttons" value="Submit Corrections" />
        </p>
 		</form>
    </div>
</div>
</body>
</html>
